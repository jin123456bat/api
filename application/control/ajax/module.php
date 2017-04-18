<?php
namespace application\control\ajax;
use system\core\ajax;
use application\message\json;
class module extends ajax
{
	function create_api_module()
	{
		$id = $this->post('id');
		$module = $this->model('module')->where('id=? and isdelete=?',[$id,0])->find();
		if (!empty($module))
		{
			$module['parameter'] = $this->model('module_parameter')->where('mid=?',[$module['id']])->orderby('sort','asc')->select();
			if(empty($this->model('api_module')->where('api_id=? and module_id=?',[$this->post('api_id'),$id])->find()))
			{
				$this->model('api_module')->insert([
					'api_id' => $this->post('api_id'),
					'module_id' => $id,
					'createtime' => $_SERVER['REQUEST_TIME'],
				]);
				return new json(json::OK,NULL,$module);
			}
			return new json(json::PARAMETER_ERROR,'不能重复添加');
		}
		return new json(json::PARAMETER_ERROR);
		
	}
	
	function sort()
	{
		$ids = $this->post('id',array());
		foreach ($ids as $index => $id)
		{
			$this->model('module_parameter')->where('id=?',[$id])->limit(1)->update('sort',$index);
		}
		return new json(json::OK);
	}
	
	function create()
	{
		$id = $this->post('id',NULL);
		if (empty($id))
		{
			$api_id = $this->post('api');
			$pid = $this->model('api')->table('group','left join','group.id=api.gid')->where('api.id=?',[$api_id])->find('group.pid');
			if (!empty($pid))
			{
				$id = $pid['pid'];
			}
			else
			{
				return new json(json::PARAMETER_ERROR);
			}
		}
		$name = $this->post('name','');
		$description = $this->post('description','');
		$parameter = $this->post('parameter');
		
		
		$moduleData = [
			'name' => $name,
			'description' => $description,
			'isdelete' => 0,
			'deletetime' => 0,
			'modifytime' => $_SERVER['REQUEST_TIME'],
			'createtime' => $_SERVER['REQUEST_TIME'],
			'pid' => $id,
		];
		
		$this->model('module')->transaction();
		if($this->model('module')->insert($moduleData))
		{
			$mid = $this->model('module')->lastInsertId();
			$moduleData['id'] = $mid;
			if(is_array($parameter) && !empty($parameter))
			{
				$moduleData['parameter'] = [];
				foreach($parameter as $index=>$p)
				{
					if(!$this->model('module_parameter')->insert([
						'mid' => $mid,
						'name' => $p['name'],
						'value' => $p['value'],
						'description' => $p['description'],
						'sort' => $index+1,
					]))
					{
						$this->model('module')->rollback();
						return new json(json::PARAMETER_ERROR,'添加失败，请重试');
					}
					else
					{
						$p['id'] = $this->model('module_parameter')->lastInsertId();
						$moduleData['parameter'][] = $p;
					}
				}
			}
			
			if (!empty($this->post('api')))
			{
				if(!$this->model('api_module')->insert([
					'api_id' => $this->post('api'),
					'module_id' => $mid,
					'createtime' => $_SERVER['REQUEST_TIME'],
				]))
				{
					return new json(json::PARAMETER_ERROR,'关联API失败');
				}
			}
			$this->model('module')->commit();
			return new json(json::OK,NULL,$moduleData);
		}
		$this->model('module')->rollback();
		return new json(json::PARAMETER_ERROR,'添加失败');
	}
	
	function remove_parameter()
	{
		$id = $this->post('id');
		if($this->model('module_parameter')->where('id=?',[$id])->delete())
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	function create_parameter()
	{
		$parameterModel = [
			'mid' => $this->post('id'),
			'name' => $this->post('name',''),
			'value' => $this->post('value',''),
			'description' => $this->post('description',''),
			'sort' => intval(count($this->model('module_parameter')->where('mid=?',[$this->post('id')])->select()))+1
		];
		if($this->model('module_parameter')->insert($parameterModel))
		{
			$parameterModel['id'] = $this->model('module_parameter')->lastInsertId();
			return new json(json::OK,NULL,$parameterModel);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	function remove()
	{
		$id = $this->post('id');
		if($this->model('module')->where('id=?',[$id])->update([
			'isdelete'=>1,
			'deletetime'=>$_SERVER['REQUEST_TIME'],
		]))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	/**
	 * 移除api和module的关系
	 */
	function remove_api_module()
	{
		$module_id = $this->post('module_id');
		$api_id = $this->post('api_id');
		if($this->model('api_module')->where('module_id =? and api_id =?',[$module_id,$api_id])->delete())
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
}