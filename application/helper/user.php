<?php
namespace application\helper;
use system\core\base;
class user extends base
{
	/**
	 * 获取当前登录用户的id
	 */
	function getUserId()
	{
		return $this->session->id;
	}
	
	/**
	 * 当前是否已经登陆了用户
	 * @return boolean
	 */
	function isLogin()
	{
		return $this->getUserId() !== NULL;
	}
}