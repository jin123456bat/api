<?php
namespace system\core;
abstract class parameter
{
	protected $_post;
	
	protected $_get;
	
	protected $_url;
	
	function __construct($url)
	{
		$this->_url = $url;
	}
	
	function setPost($data = array())
	{
		$this->_post = $data;
	}
	
	function setGet($data = array())
	{
		$this->_get = $data;
	}
	
	abstract function getPostParam();
	
	abstract function getGetParam();
}