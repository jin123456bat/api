<?php
namespace application\control\ajax;
use application\message\json;
use system\core\ajax;
use system\core\random;
class user extends ajax
{
	function login()
	{
		$username = $this->post('username');
		$password = $this->post('password');
		$user = $this->model('user')->where('username=? or email=?',[$username,$username])->find();
		if(md5($password.$user['salt']) == $user['password'])
		{
			$this->session->id = $user['id'];
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR,'密码错误');
	}
	
	function register()
	{
		$username = $this->post('username');
		$password = $this->post('password');
		$email = $this->post('email');
		$salt = random::word(6);
		
		$password = md5($password.$salt);
		if($this->model('user')->insert([NULL,$username,$password,$salt,$email,NULL]))
		{
			return new json(json::OK);
		}
		return new json(json::PARAMETER_ERROR,'用户名或邮箱已经存在');
	}
	
	function search()
	{
		$username = $this->get('username');
		$result = $this->model('user')->where('username like ?',['%'.$username.'%'])->select();
		return new json(json::OK,NULL,$result);
	}
}