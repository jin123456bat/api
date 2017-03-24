<?php
namespace application\control\view;
use system\core\view;
use system\core\filesystem;
use application\message\json;
class file extends view
{
	function clear()
	{
		$name = $this->post('name');
		$index = 1;
		$array = [];
		do {
			$file = './application/upload/pieces/'.md5($name).'_'.$index.'.pieces';
			if(unlink($file))
			{
				$array[] = $file;
			}
			$index++;
		}
		while(file_exists($file));
		
		return new json(json::OK,NULL,[
			'name' => $file,
			'index' => $index,
		]);
	}
	
	function upload()
	{
		//这里判断是否是分片文件上传
		if(isset($_FILES['data']['type']) && $_FILES['data']['type'] == 'application/octet-stream' && isset($_FILES['data']['name']) && $_FILES['data']['name']=='blob')
		{
			$userHelper = new \application\helper\user();
			$uid = $userHelper->getUserId();
			$name = $this->post('name');//真实的文件名称
			$total = $this->post('total');//总文件数量
			$index = $this->post('index');//当前文件数量
			$pid = $this->post('pid');
			if (empty($pid))
				return new json(json::PARAMETER_ERROR);
				
			$extension = pathinfo($name,PATHINFO_EXTENSION);
				
			if (is_uploaded_file($_FILES['data']['tmp_name'])) {
	
				$path = ROOT.'/application/upload/pieces';//保存分片文件位置
					
				if ($_FILES['data']['error'] != UPLOAD_ERR_OK) {
					return new json(json::PARAMETER_ERROR,'文件上传失败');
				}
					
				if ($_FILES['data']['size'] > 2*1024*1024) {
					return new json(json::PARAMETER_ERROR,'分片文件太大');
				}
	
				$filename = $path.'/'.md5($name).'_'.$index.'.pieces';
	
				if (move_uploaded_file($_FILES['data']['tmp_name'], $filename))
				{
					if ($total == 1)
					{
						$newname = './application/upload/'.md5_file($filename).'.'.$extension;
						if(rename($filename, $newname))
						{
							$fileMoudel = [
								'pid' => $this->post('pid',NULL),
								'name' => $name,
								'type' => $extension,
								'path' => $newname,
								'size' => filesize($newname),
								'uploadtime' => $_SERVER['REQUEST_TIME'],
								'isdelete' => 0,
								'deletetime' => 0,
								'download' => 0,
								'uid' => $uid,
								'note' => '',
							];
							if($this->model('file')->insert($fileMoudel))
							{
								$fileMoudel['id'] = $this->model('file')->lastInsertId();
								return new json(json::OK,NULL,$fileMoudel);
							}
							else
							{
								return new json(json::PARAMETER_ERROR,'理论上不该出现这个错误');
							}
						}
						else
						{
							return new json(json::PARAMETER_ERROR,'文件名更改失败');
						}
					}
					else
					{
						if ($index==$total)
						{
							ini_set('max_execution_time', 0);
							for($i = 2;$i<=$total;$i++)
							{
								$filename = $path.'/'.md5($name).'_1.pieces';
								$piecesFile = $path.'/'.md5($name).'_'.$i.'.pieces';
								if (file_exists($piecesFile) && $filename)
								{
									$filename = $this->file->merge($filename,$piecesFile);
									if ($piecesFile===false)
									{
										return new json(json::PARAMETER_ERROR,'文件合并失败');
									}
									else
									{
										unlink($piecesFile);
									}
								}
							}
								
							$newname = './application/upload/'.md5_file($filename).'.'.$extension;
							if(rename($filename, $newname))
							{
								$fileMoudel = [
									'pid' => $this->post('pid',NULL),
									'name' => $name,
									'type' => $extension,
									'path' => $newname,
									'size' => filesize($newname),
									'uploadtime' => $_SERVER['REQUEST_TIME'],
									'isdelete' => 0,
									'deletetime' => 0,
									'download' => 0,
									'uid' => $uid,
									'note' => '',
								];
								if($this->model('file')->insert($fileMoudel))
								{
									$fileMoudel['key'] = $this->post('key');
									$fileMoudel['id'] = $this->model('file')->lastInsertId();
									return new json(json::OK,NULL,$fileMoudel);
								}
								else
								{
									return new json(json::PARAMETER_ERROR,'理论上不该出现这个错误');
								}
							}
							else
							{
								return new json(json::PARAMETER_ERROR,'文件名更改失败');
							}
						}
						else if ($index > $total)
						{
							return new json(json::PARAMETER_ERROR,'错误的分片数量');
						}
						else if ($index == 1)
						{
							return new json(101,'ok',$this->post('key'));
						}
						else
						{
							return new json(102,'ok',$this->post('key'));
						}
					}
				}
				return new json(json::PARAMETER_ERROR,'移动文件失败');
			}
			return new json(json::PARAMETER_ERROR,'不是合法的上传文件');
		}
		return new json(json::PARAMETER_ERROR,'文件上传失败');
	}
	
	
	function download()
	{
		$id = $this->get('id');
		
		$file = $this->model('file')->where('id=?',[$id])->find();
		
		if (!empty($file))
		{
			$this->model('file')->where('id=?',[$id])->increase('download',1);
			
			/*获得文件的mimeType*/
			$mimeType = filesystem::mimetype($file['path']);
			
			$mimeType = empty($mimeType)?'application/octet-stream':$mimeType;
			
			/*获得文件的文件名*/
			$name = $file['name'];
			/*获得文件大小*/
			$filesize = $file['size'];
			/*设置头*/
			$this->response->addHeader('Content-Type: '.$mimeType);
			$this->response->addHeader('Content-Disposition: attachment; filename="' . $name . '"');
			$this->response->addHeader('Accept-Ranges: bytes');
			$this->response->addHeader('Date: '.gmdate('D, d M Y H:i:s', $_SERVER['REQUEST_TIME']).' GMT');
			$this->response->addHeader('Last-Modified: ' . gmdate('D, d M Y H:i:s' , filemtime($file['path'])).' GMT');
			$this->response->addHeader('Content-Encoding: none');
			
			if(!empty($_SERVER['HTTP_RANGE']))
			{
				header('HTTP /1.1 206 Partial Content');
				list($range) = explode('-',(str_replace('bytes=', '', $_SERVER['HTTP_RANGE'])));
				$rangesize = ($filesize - $range) > 0 ? ($filesize - $range) : 0;
				$this->response->addHeader('Content-Length: '.$rangesize);
				$this->response->addHeader('Content-Range: bytes='.$range.'-'.($filesize-1).'/'.$filesize);
			}
			else
			{
				$this->response->addHeader('Content-Length: '.$filesize);
				$range = 0;
			}
			/*设置脚本执行时间*/
			set_time_limit(0);
			/*输出文件*/
			$fp = fopen($file['path'],'rb+');
			$content = '';
			fseek($fp,$range);
			while(!feof($fp))
			{
				$content .= fread($fp,8192);
			}
			return $content;
		}
	}
}