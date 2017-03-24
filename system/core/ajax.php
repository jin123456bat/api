<?php
namespace system\core;
use system\core\exception\request;
class ajax extends control
{
	/**
	 * 响应内容
	 * @var unknown
	 */
	private $_response;
	
	/**
	 * 
	 */
	function __construct()
	{
		parent::__construct();
		$this->init();
	}
	
	function init()
	{
		if (!$this->http->isAjax())
		{
			throw new request('非法请求', 401);
		}
		
		$form = new form(config('form'));
		if(!$form->auth())
		{
			throw new request('csrf攻击', 402);
		}
	}
	
	function __call($name,$args)
	{
		throw new request('请求的地址不存在', 404);
	}
}