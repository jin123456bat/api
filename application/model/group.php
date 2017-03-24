<?php
namespace application\model;
use system\core\model;
class groupModel extends model
{
	function __construct($table)
	{
		parent::__construct($table);
	}
	
	function fetch(array $filter = array())
	{
		if(isset($filter['isdelete']))
		{
			$this->where('isdelete = ?',[$filter['isdelete']]);
		}
		if(isset($filter['pid']))
		{
			$this->where('pid=?',[$filter['pid']]);
		}
		return parent::fetch($filter);
	}
	
	function fetchAll(array $filter = array())
	{
		$this->table('project','left join','group.pid=project.id');
		if (isset($filter['uid']))
		{
			$this->where('project.uid=?',[$filter['uid']]);
		}
		if (isset($filter['isdelete']))
		{
			$this->where('project.isdelete = ? and group.isdelete=?',[$filter['isdelete'],$filter['isdelete']]);
		}
		return parent::fetch($filter);
	}
}