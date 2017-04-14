<?php
namespace application\helper;

use system\core\parameter;

class common extends parameter
{
	/**
	 * {@inheritDoc}
	 * @see \system\core\parameter::getParam()
	 */
	public function getPostParam()
	{
		return $this->_post;
	}
	
	public function getGetParam()
	{
		return $this->_get;
	}
}