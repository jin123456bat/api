<?php
namespace application\helper;

use system\core\parameter;

/**
 * 创建api的请求参数
 * @author fx
 *
 */
class api extends parameter
{
	private $_partner = 'ios';
	
	private $_key = 'ios';
	
	function getPostParam()
	{
		$sign = $this->sign($this->_url, $this->_post, $this->_partner, $this->_key);
		return array(
			'data' => $this->_data,
			'partner' => $this->_partner,
			'sign' => $sign
		);
	}
	
	function getGetParam()
	{
		return $this->_get;
	}
	
	//加载自定义函数
	private function sign($url,$data,$partner,$key)
	{
		ksort($data);
		reset($data);
		$data = strtolower(http_build_query($data));
		return strtoupper(md5($data.$partner.$key));
	}
}