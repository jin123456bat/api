<?php
namespace system\core;

use system\core\inter\config;
/**
 * 视图以及模板管理
 *
 * @author 程晨
 *        
 */
class view extends base
{
	/**
	 * 配置
	 */
	private $_viewConfig;
	
	/**
	 * 模板名称
	 * @var unknown
	 */
	private $_viewname;
	
	/**
	 * 模板引擎路径
	 * @var unknown
	 */
	private $_enginePath;
	
	/**
	 * 模板引擎实例
	 * @var unknown
	 */
	private $_smarty;
	
	/**
	 * 当前模板是否缓存
	 * @var unknown
	 */
	private $_cache;
	
	/**
	 * 模板目录
	 * @var unknown
	 */
	private $_template_dir;
	
	/**
	 * 模板类型
	 * @var unknown
	 */
	private $_contentType;
	
	/**
	 * 构造函数
	 * @param unknown $viewConfig
	 * @param unknown $viewname
	 */
	function __construct(config $config = NULL,$template_name = NULL)
	{
		parent::__construct();
		
		$this->_viewConfig = $config === NULL?config('view'):$config;
		
		$this->_cache = false;
		$this->_contentType = 'text/html';
		
		
		if ($template_name === NULL)
		{
			$subclassname = explode('\\', get_class($this));
			$this->_template_dir = end($subclassname).'/';
			
			$this->_viewname = $this->get('a')===NULL?config('system')->default_action:$this->get('a');
		}
		else
		{
			$this->_template_dir = '';
			$this->_viewname = $template_name;
		}
		$this->init();
	}
	
	/**
	 * 设置模板文件名
	 * @param unknown $viewname
	 */
	function setViewname($viewname)
	{
		$this->_viewname = $viewname;
	}
	
	/**
	 * 设置模板目录
	 */
	function setTemplateDir($dir)
	{
		$this->_template_dir = $dir;
	}
	
	/**
	 * 设置当前页面是否缓存
	 * @return unknown
	 */
	function isCache()
	{
		return $this->_cache;
	}
	
	/**
	 * 设置模板类型
	 * @param unknown $contentType
	 */
	function setContentType($contentType)
	{
		$this->_contentType = $contentType;
	}
	
	/**
	 * 获取模板类型
	 */
	function getContentType()
	{
		return $this->_contentType;
	}
	
	function __call($name,$args)
	{
		return $this->display();
	}
	
	/**
	 * 初始化模板引擎
	 */
	private function init()
	{
		$this->_enginePath = ROOT.'/extends/smarty/Smarty.class.php';
		include_once $this->_enginePath;
		$this->_smarty = new \Smarty();
		
		$this->_smarty->template_dir = $this->_viewConfig->template_dir;
		$this->_smarty->caching = $this->_viewConfig->caching;									//是否使用缓存
		$this->_smarty->compile_dir = $this->_viewConfig->compile_dir;		//设置编译目录
		$this->_smarty->cache_dir = $this->_viewConfig->cache_dir;						//设置缓存文件夹
		$this->_smarty->left_delimiter = $this->_viewConfig->left_delimiter;							//设置左右标示符
		$this->_smarty->right_delimiter = $this->_viewConfig->right_delimiter;
		
		$http = $this->http->isHttps()?'https://':'http://';
		$path = str_replace('\\', '/', $this->http->path());
		$path = rtrim($path,'/');
		$baseUrl = rtrim($http.$this->http->host().$path.'/application/template','/');
		$this->_smarty->assign("VIEW_ROOT",$baseUrl);
		
		$form = new form(config('form'));
		$this->_smarty->assign('x_csrf_token',$form->x_csrf_token());
		
		$this->_smarty->registerPlugin('function',"url", array($this,'url'));
		$this->_smarty->registerPlugin('function','resource',array($this,'resource'));
		$this->_smarty->registerPlugin('function','formatSize',array($this,'formatSize'));
		
	}
	
	/**
	 * 图片路径转化
	 * @param unknown $parameter
	 * @return string
	 */
	function resource($parameter)
	{
		$fileid = $parameter['file'];
		$uploadModel = $this->model('upload');
		return $uploadModel->get($fileid,'path');
	}
	
	/**
	 * 格式化大小
	 * @param unknown $parameter
	 * @return number
	 */
	function formatSize($parameter)
	{
		$size = $parameter['size'];
		$temp = ['字节','KB','MB','GB','TB'];
		$index = 0;
		while ($size>=1024)
		{
			$index++;
			$size = $size/1024;
		}
		return number_format($size,2,'.',',').$temp[$index];
	}
	
	/**
	 * url生成
	 * @param unknown $parameter
	 * @return mixed
	 */
	function url($parameter)
	{
		$http = http::getInstance();
		$c = isset($parameter['c'])?$parameter['c']:'';
		$a = isset($parameter['a'])?$parameter['a']:'';
		$m = isset($parameter['m'])?$parameter['m']:'';
		$urlencode = false;
		if(isset($parameter['urlencode']))
		{
			$urlencode = $parameter['urlencode'];
			unset($parameter['urlencode']);
		}
		unset($parameter['c']);
		unset($parameter['a']);
		unset($parameter['m']);
		$array = array('m'=>$m,'c'=>$c,'a'=>$a,'array'=>$parameter);
		if(!$urlencode)
		{
			return call_user_func_array(array($http,'url'), $array);
		}
		else
		{
			return urlencode(call_user_func_array(array($http,'url'), $array));
		}
	}
	
	/**
	 * 添加模板变量
	 * @param unknown $key
	 * @param unknown $val
	 * @return Smarty_Internal_Data
	 */
	function assign($key,$val)
	{
		return $this->_smarty->assign($key,$val);
	}
	
	/**
	 * 展示模板
	 */
	function display()
	{
		$filename = rtrim($this->_viewConfig->template_dir,'/').'/'.$this->_template_dir.$this->_viewname.'.html';
		if (file_exists($filename))
		{
			try {
				return $this->_smarty->fetch($filename);
			}
			catch (\Exception $e)
			{
				return $e->getMessage();
			}
		}
	}
	
	/**
	 * 魔法方法，用于获取模板内容
	 */
	function __toString()
	{
		return $this->display();
	}
}