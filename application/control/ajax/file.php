<?php
namespace application\control\ajax;
use system\core\ajax;
use application\message\json;
class file extends ajax
{
	function remove()
	{
		$id = $this->post('id');
		if($this->model('file')->where('id=?',[$id])->update([
			'isdelete'=>1,
			'deletetime' => $_SERVER['REQUEST_TIME']
		]))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR);
	}
}