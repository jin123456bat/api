<?php
namespace application\model;
use system\core\model;
class uploadModel extends model
{
	function __construct($table)
	{
		parent::__construct($table);
	}
	
	function get($id,$name)
	{
		$file = $this->where('id=?',[$id])->find();
		return isset($file[$name])?$file[$name]:NULL;
	}
}