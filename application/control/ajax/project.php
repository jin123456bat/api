<?php
namespace application\control\ajax;
use system\core\ajax;
use application\helper\user;
use application\message\json;
class project extends ajax
{
	function create()
	{
		$name = $this->post('name');
		$description = $this->post('description','');
		$logo = $this->post('logo',NULL,'intval');
		
		$host = $this->post('host','');
		
		$introduction = $this->post('introduction','');
		
		$user = new user();
		$uid = $user->getUserId();
		if (empty($uid))
			return new json(json::NOT_LOGIN);
		
		if($this->model('project')->insert([NULL,$uid,$name,$logo,$description,$_SERVER['REQUEST_TIME'],0,NULL,0,$host,$introduction,NULL]))
		{
			return new json(json::OK,NULL,$this->model('project')->lastInsertId());
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	function save()
	{
		$id = $this->post('id');
		
		$name = $this->post('name');
		$description = $this->post('description','');
		$logo = $this->post('logo',NULL);
		
		$host = $this->post('host','');
		
		$introduction = $this->post('introduction','');
		
		$user = new user();
		$uid = $user->getUserId();
		if (empty($uid))
			return new json(json::NOT_LOGIN);
		$this->model('project')->where('id=?',[$id])->update([
			'name' => $name,
			'description' => $description,
			'logo' => $logo,
			'host' => $host,
			'introduction' => $introduction,
		]);
		return new json(json::OK);
	}
	
	function remove()
	{
		$id = $this->post('id');
		if($this->model('project')->where('id=?',[$id])->update(
			[
				'isdelete'=>1,
				'deletetime' => $_SERVER['REQUEST_TIME']
			]))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	function recover()
	{
		$id = $this->post('id');
		if($this->model('project')->where('id=?',[$id])->update('isdelete',0))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	
	function addUser()
	{
		$pid = $this->post('pid',0,'intval');
		$uid = $this->post('uid',0,'intval');
		if (empty($pid) || empty($uid))
			return new json(json::PARAMETER_ERROR);
		if(empty($this->model('project')->where('id=? and uid=?',[$pid,$uid])->select()))
		{
			if(empty($this->model('project_user')->where('project_id = ? and user_id = ?',[$pid,$uid])->select()))
			{
				if($this->model('project_user')->insert([$pid,$uid]))
				{
					return new json(json::OK);
				}
				return new json(json::PARAMETER_ERROR,'添加失败');
			}
			return new json(json::PARAMETER_ERROR,'已经是成员了');
		}
		return new json(json::PARAMETER_ERROR,'不能添加自己为成员');
	}
}