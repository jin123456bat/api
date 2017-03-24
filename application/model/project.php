<?php
namespace application\model;
use system\core\model;
class projectModel extends model
{
	function __construct($table)
	{
		parent::__construct($table);
	}
	
	function fetch(array $filter = [])
	{
		if (isset($filter['uid']))
		{
			$this->where('uid=?',[$filter['uid']]);
		}
		if (isset($filter['isdelete']))
		{
			$this->where('isdelete=?',[$filter['isdelete']]);
		}
		if (isset($filter['complete']))
		{
			$this->where('complete=?',[$filter['complete']]);
		}
		return parent::fetch($filter);
	}
}