<?php
namespace application\control\ajax;
use system\core\ajax;
use application\message\json;
class group extends ajax
{
	function create()
	{
		$name = $this->post('name');
		if (empty($name))
			return new json(json::PARAMETER_ERROR,'请输入分类名称');
		$pid = $this->post('pid');
		$sort = $this->post('sort',0,'intval');
		if($this->model('group')->insert([NULL,$pid,$name,$sort,0,NULL]))
		{
			return new json(json::OK,NULL,$this->model('group')->lastInsertId());
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	function rename()
	{
		$id = $this->post('pk');
		$name = $this->post('name');
		$value = $this->post('value');
		$this->model('group')->where('id=?',[$id])->update($name,$value);
		return new json(json::OK);
	}
	
	function recover()
	{
		$id = $this->post('id');
		if($this->model('group')->where('id=?',[$id])->update([
			'isdelete' => 0,
		]))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
	
	function sort()
	{
		$id = $this->post('id',[]);
		if (is_array($id))
		{
			foreach ($id as $key => $value)
			{
				$this->model('group')->where('id=?',[$value])->update('sort',$key);
			}
		}
		return new json(json::OK);
	}
	
	function remove()
	{
		$id = $this->post('id');
		if($this->model('group')->where('id=?',[$id])->update([
			'isdelete' => 1,
			'deletetime' => $_SERVER['REQUEST_TIME']
		]))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
}