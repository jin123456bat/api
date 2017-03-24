<?php

/**
 * 载入配置文件
 *
 * @param string $name
 *        	配置名称
 * @param bool $parent
 *        	强制只载入系统配置
 * @return new config
 */
function config($name, $parent = false)
{
	$prefix = $parent?'parent_':'';
	static $_instance = array();
	if (! isset($_instance[$prefix.$name])) {
		$classname = $name . 'Config';
		$path = ROOT . '/system/core/config/' . $classname . '.php';
		if (file_exists($path)) {
			include_once $path;
			$namespace = 'system\\core\\config\\' . $classname;
			$_instance[$prefix.$name] = new $namespace();
		}
		$userPath = ROOT . '/application/config/' . $classname . '.php';
		if (file_exists($userPath) && ! $parent) {
			$namespace = '\\application\\config\\' . $classname;
			include $userPath;
			$userViewConfig = new $namespace();
			if (isset($_instance[$prefix.$name])) {
				$_instance[$prefix.$name] = $_instance[$prefix.$name]->combine($userViewConfig);
			} else {
				$_instance[$prefix.$name] = $userViewConfig;
			}
		}
	}
	return $_instance[$prefix.$name];
}

/**
 * xml对象转化为数组
 */
function xmlToArray($xmlString)
{
	if(is_string($xmlString))
	{
		$xmlObj = simplexml_load_string($xmlString);
		return json_decode(json_encode($xmlObj,true),true);
	}
}