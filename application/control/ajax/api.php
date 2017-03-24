<?php
namespace application\control\ajax;
use system\core\ajax;
use application\message\json;
use application\helper\user;
use system\core\random;
class api extends ajax
{
	function question()
	{
		$userHelper = new user();
		if($userHelper->isLogin())
		{
			$uid = $userHelper->getUserId();
			$content = $this->post('content','');
			$questionModel = [
				'content' => $content,
				'user_id' => $uid,
				'isdelete' => 0,
				'deletetime' => 0,
				'createtime' => $_SERVER['REQUEST_TIME'],
				'api_id' => $this->post('id'),
			];
			if($this->model('api_question')->insert($questionModel))
			{
				$questionModel['id'] = $this->model('api_question')->lastInsertId();
				
				$user = $this->model('user')->where('id=?',[$uid])->find();
				$questionModel['username'] = $user['username'];
				return new json(json::OK,NULL,$questionModel);
			}
			return new json(json::PARAMETER_ERROR);
		}
		return new json(json::NOT_LOGIN);
	}
	
	function remove_question()
	{
		$id = $this->post('id');
		$userHelper = new user();
		if ($userHelper->isLogin())
		{
			if($this->model('api_question')->where('id=? and user_id=?',[$id,$userHelper->getUserId()])->update([
				'isdelete'=>1,
				'deletetime' => $_SERVER['REQUEST_TIME']
			]))
			{
				return new json(json::OK);
			}
			return new json(json::PARAMETER_ERROR);
		}
		return new json(json::NOT_LOGIN);
	}
	
	
	function edit()
	{
		$id = $this->post('id');
		$name = $this->post('name','');
		$url = $this->post('url','');
		$method = $this->post('method','post');
		$version = $this->post('version',1);
		$response = $this->post('response','');
		$description = $this->post('description','');
		$note = $this->post('note','');
		$parameters = $this->post('parameter',[]);
		$debug = $this->post('debug',1);
		
		
		if($this->model('api')->where('id=?',[$id])->update([
			'name' => $name,
			'url' => $url,
			'method' => $method,
			'version' => $version,
			'response' => $response,
			'description' => $description,
			'note' => $note,
			'modifytime' => $_SERVER['REQUEST_TIME'],
			'debug' => $debug
		]))
		{
			if (is_array($parameters) && !empty($parameters))
			{
				$this->model('parameter')->where('api_id=?',[$id])->delete();
				foreach ($parameters as $parameter)
				{
					$this->model('parameter')->insert([
						'api_id' => $id,
						'name' => $parameter['name'],
						'type' => $parameter['type'],
						'method' => $parameter['method'],
						'need' => $parameter['need'],
						'length_min' => $parameter['length_min'],
						'length_max' => $parameter['length_max'],
						'dvalue' => $parameter['dvalue'],
						'demo' => $parameter['demo'],
						'description' => $parameter['description'],
					]);
				}
			}
		}
		return new json(json::OK);
	}
	
	function create()
	{
		$id = $this->post('id');
		$name = $this->post('name','');
		$url = $this->post('url','');
		$method = $this->post('method','post');
		$version = $this->post('version',1);
		$response = $this->post('response','');
		$description = $this->post('description','');
		$note = $this->post('note','');
		$parameters = $this->post('parameter',[]);
		$debug = $this->post('debug',1);
		
		
		if ($name == '')
			$name = '新接口文档';
		
		if($this->model('api')->insert([
			'id' => NULL,
			'gid' => $id,
			'name' => $name,
			'url' => $url,
			'method' => $method,
			'version' => $version,
			'response' => $response,
			'description' => $description,
			'note' => $note,
			'createtime' => $_SERVER['REQUEST_TIME'],
			'modifytime' => $_SERVER['REQUEST_TIME'],
			'isdelete' => 0,
			'debug' => $debug,
		]))
		{
			$api_id = $this->model('api')->lastInsertId();
			if (is_array($parameters) && !empty($parameters))
			{
				foreach ($parameters as $parameter)
				{
					$this->model('parameter')->insert([
						'api_id' => $api_id,
						'name' => $parameter['name'],
						'type' => $parameter['type'],
						'method' => isset($parameter['method'])?$parameter['method']:'post',
						'need' => $parameter['need'],
						'length_min' => $parameter['length_min'],
						'length_max' => $parameter['length_max'],
						'dvalue' => $parameter['dvalue'],
						'demo' => $parameter['demo'],
						'description' => $parameter['description'],
					]);
				}
			}
		}
		return new json(json::OK,NULL,$api_id);
	}
	
	
	function remove()
	{
		$id = $this->post('id');
		if($this->model('api')->where('id=?',[$id])->update('isdelete',1))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	
	/**
	 * 获取通过接口过来的post参数
	 * @param string $name
	 * @return unknown|NULL
	 */
	private function getPostParamter($name = NULL)
	{
		if (empty($name))
			return isset($_POST['post'])?$_POST['post']:[];
		return isset($_POST['post'][$name])?$_POST['post'][$name]:NULL;
	}
	
	/**
	 * 获取通过接口过来的get参数
	 * @param string $name
	 * @return unknown|NULL
	 */
	private function getGetParameter($name = NULL)
	{
		if (empty($name))
			return isset($_POST['get'])?$_POST['get']:[];
		return isset($_POST['get'][$name])?$_POST['get'][$name]:NULL;
	}
	
	/**
	 * 获取文件参数
	 * @param string $name
	 * @return Ambigous <multitype:, unknown>
	 */
	private function getFileParameter($name = NULL)
	{
		if (empty($name))
			return isset($_FILES[$name]) && is_array($_FILES[$name])?$_FILES[$name]:[];
		return isset($_FILES[$name]) && is_array($_FILES[$name])?$_FILES[$name]:[];
	}
	
	/**
	 * 测试接口的接口
	 */
	function demo()
	{
		//提交的地址
		$url = $this->post('url','');
		if (empty($url))
			return '';
		//是否携带cookie
		$api_with_cookie = $this->post('api_with_cookie',1);
		//是否刷新cookie
		$api_refresh_cookie = $this->post('api_refresh_cookie',0);
		
		//注销掉url参数
		unset($_POST['url']);
		unset($_POST['api_with_cookie']);
		unset($_POST['api_refresh_cookie']);
		
		//载入全局参数
		$partner = 'android';
		$key = 'android';
		
		//加载自定义函数
		function sign($url,$data,$partner,$key)
		{
			ksort($data);
			reset($data);
			$data = strtolower(http_build_query($data));
			return strtoupper(md5($data.$partner.$key));
		}
		
		//组装get参数
		if (strpos($url, '?') === false)
		{
			$url .= '?'.http_build_query($this->getGetParameter());
		}
		else
		{
			$url .= '&'.http_build_query($this->getGetParameter());
		}
		
		$parameter = [
			'partner' => $partner,
			'sign' => sign('',$this->getPostParamter(),$partner,$key),
		];
		
		foreach ($this->getPostParamter() as $key => $value)
		{
			$parameter['data['.$key.']'] = $value;
		}
		
		$userHelper = new user();
		$uid = $userHelper->getUserId();
		
		$curl = curl_init($url);
		curl_setopt ( $curl, CURLOPT_POST, 1 );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $curl, CURLOPT_POSTFIELDS, $parameter );
		curl_setopt ( $curl, CURLOPT_TIMEOUT, 5);
		curl_setopt ( $curl, CURLOPT_HEADER, true);
		
		if ($userHelper->isLogin())
		{
			if (!empty($api_with_cookie))
			{
				$cookie = $this->model('user')->where('id=?',[$uid])->find('api_cookie');
				if (isset($cookie['api_cookie']) && !empty($cookie['api_cookie']))
				{
					curl_setopt ( $curl, CURLOPT_COOKIE, $cookie['api_cookie']);
				}
			}
		}
		
		$response = curl_exec($curl);
		
		//请求返回的状态码
		$http_code = curl_getinfo($curl,CURLINFO_HTTP_CODE);
		
		$headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
		
		//请求时间
		$last_msec = intval(curl_getinfo($curl,CURLINFO_TOTAL_TIME) * 1000);
		
		$content_type = curl_getinfo($curl,CURLINFO_CONTENT_TYPE );
	
		//实际上请求到的header和body
		$header = str_replace("\r\n", "<br>", substr($response, 0, $headerSize));
		$body = substr($response, $headerSize);
		
		curl_close($curl);
		
		//保存header中的cookie
		if(preg_match('/Set-Cookie:(.*);/iU',$header,$str))
		{
			if (!empty($api_refresh_cookie) && isset($str[1]))
			{
				$this->model('user')->where('id=?',[$uid])->update('api_cookie',$str[1]);
			}
		}
		
		if (strpos($content_type, 'image') !== false)
		{
			//假如是图片文件的话
			$file = tempnam('./application/temp',random::word(12));
			if ($file !== false)
			{
				file_put_contents($file, $body);
				$file = str_replace(ROOT, 'http://'.$_SERVER['HTTP_HOST'], $file);
				$body = $file;
				$content_type = 'image';
			}
		}
		return new json([
			'header' => $header,
			'content' => $body,
			'last_msec' => $last_msec,
			'http_code' => $http_code,
			'content_type' => $content_type,
		]);
	}
}