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
		
		if ($this->_config['type']=='mysql')
		{
			$sessionHandle = new sessionHandler($this->_config);
			session_set_save_handler($sessionHandle);
			register_shutdown_function('session_write_close');
		}
		
		$this->_expire = session_cache_expire();
		if(isset($this->_config['expire']))
		{
			session_cache_expire($this->_config['expire']);
			$this->_expire = $this->_config['expire'];
		}
		
		if (!empty($this->_config['save_path']))
		{
			ini_set('session.save_path', $this->_config['save_path']);
		}
		
		if (!empty($this->_config['cookie_path']))
		{
			ini_set('session.cookie_path',$this->_config['cookie_path']);
		}
		
		if ($this->_config['httponly'])
		{
			ini_set("session.cookie_httponly", 1);
		}
		
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
		if(empty(self::$_instance))
			self::$_instance = new self(config('session'));
		return self::$_instance;
	}

	function __get($name)
	{
		$name = !empty($this->_config['prefix'])?$this->_config['prefix'].$name:'';
		return isset($_SESSION[$name]) ? $_SESSION[$name] : NULL;
	}

	function __set($name, $value)
	{
		$name = !empty($this->_config['prefix'])?$this->_config['prefix'].$name:'';
		$_SESSION[$name] = $value;
	}

	function __isset($name)
	{
		$name = !empty($this->_config['prefix'])?$this->_config['prefix'].$name:'';
		return isset($_SESSION[$name]) && ! empty($_SESSION['name']);
	}

	function __unset($name)
	{
		$name = !empty($this->_config['prefix'])?$this->_config['prefix'].$name:'';
		unset($_SESSION[$name]);
	}
}