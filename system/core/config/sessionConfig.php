<?php
namespace system\core\config;
use system\core\inter\config;
class sessionConfig extends config
{
	public $httponly;
	
	public $save_path;
	
	public $cookie_path;
	
	public $type;
	
	public $expire;
	/**
	 * 
	 */
	function __construct()
	{
		/**
		 * session存储类型  现在使用mysql存储
		 */
		$this->type = 'mysql';
		
		/**
		 * 数据库的表
		 */
		$this->mysql_name = 'session';
		
		/**
		 * httponly
		 */
		$this->httponly = false;
		
		/**
		 * session文件的存放位置（服务器端）
		 */
		$this->save_path = '';
		
		/**
		 * cookie存放目录
		 */
		$this->cookie_path = $_SERVER['HTTP_HOST'];
		
		/**
		 * session有效期
		 */
		$this->expire = 360;
		
		/**
		 * session前缀，用于区分同项目在同机器上调试使用
		 */
		$this->prefix = 'api_';
	}
}