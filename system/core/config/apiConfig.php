<?php
namespace system\core\config;
use system\core\inter\config;
class apiConfig extends config
{
	function __construct()
	{
		$this->_user = [
			'ios' => 'ios',
			'android' => 'ios',
		];
	}
	
	/**
	 * 签名函数
	 * @param unknown $url
	 * @param unknown $data
	 * @param unknown $partner
	 * @param unknown $key
	 * @return string
	 */
	function sign($url,$data,$partner,$key)
	{
		if (is_array($data) && !empty($data))
		{
			ksort($data);
			reset($data);
			$data = strtolower(http_build_query($data));
		}
		else
		{
			$data = '';
		}
		$result = strtoupper(md5($data.$partner.$key));
		return $result;
	}
}