<?php
namespace system\core;
use system\core\inter\config;
class sessionHandler extends model implements \SessionHandlerInterface
{
	private $_config;
	
	function __construct(config $config)
	{
		$this->_config = $config;
		parent::__construct($this->_config->mysql_name);
	}
	
	public function read($session_id)
	{
		$session = $this->where('session_id=?',[$session_id])->find();
		return $session['content'];
	}
	
	public function write ($session_id , $session_data )
	{
		$session = $this->where('session_id=?',[$session_id])->find();
		if(empty($session))
		{
			return $this->insert([$session_id,$_SERVER['REQUEST_TIME'],$session_data]);
		}
		else
		{
			return $this->where('session_id=?',[$session_id])->update([
				'time' => $_SERVER['REQUEST_TIME'],
				'content' => $session_data,
			]);
		}
	}
	
	public function open($save_path,$name)
	{
		return true;
	}
	
	public function gc($maxlifetime)
	{
		if (!empty($this->_config['expire']))
		{
			if($this->where('time < ?',[$_SERVER['REQUEST_TIME'] - $this->_config['expire']])->delete())
			{
				return true;
			}
			return false;
		}
		return false;
	}
	
	public function destroy($session_id)
	{
		if($this->where('session_id=?',[$session_id])->delete())
		{
			return true;
		}
		return false;
	}
	
	public function close()
	{
		return true;
	}
}