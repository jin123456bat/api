<?php
namespace system\core;

class session
{

	/**
	 * 180
	 * @var unknown
	 */
	public $_expire;

	private static $_instance = NULL;

	private $_config;

	private function __construct($config = NULL)
	{
		$this->_config = $config;
		
		session_start();
	}

	public static function setExpire($new_expire)
	{
		session_cache_expire($new_expire);
		$this->_expire = $new_expire;
	}

	public static function destory()
	{
		session_destroy();
	}

	public static function getInstance()
	{
		if (empty(self::$_instance))
			self::$_instance = new self(config('session'));
		return self::$_instance;
	}

	function __get($name)
	{
		$name = ! empty($this->_config['prefix']) ? $this->_config['prefix'] . $name : '';
		return isset($_SESSION[$name]) ? $_SESSION[$name] : NULL;
	}

	function __set($name, $value)
	{
		$name = ! empty($this->_config['prefix']) ? $this->_config['prefix'] . $name : '';
		$_SESSION[$name] = $value;
	}

	function __isset($name)
	{
		$name = ! empty($this->_config['prefix']) ? $this->_config['prefix'] . $name : '';
		return isset($_SESSION[$name]) && ! empty($_SESSION['name']);
	}

	function __unset($name)
	{
		$name = ! empty($this->_config['prefix']) ? $this->_config['prefix'] . $name : '';
		unset($_SESSION[$name]);
	}
}