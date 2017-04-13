<?php
namespace application\control\view;
use system\core\view;
use application\helper\user;
class front extends view
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	function project_list()
	{
		$userHelper = new user();
		$uid = $userHelper->getUserId();
		if (empty($uid))
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		$filter = [
			'uid' => $uid,
			'isdelete' => 0,
			'complete' => 0,
		];
		$myProject = $this->model('project')->fetch($filter);
		$this->assign('myProject', $myProject);
		
		$joinProject = $this->model('project')->table('project_user','left join','project_user.project_id=project.id')->where('project_user.user_id=? and project.isdelete=?',[$uid,0])->select('project.*');
		$this->assign('joinProject', $joinProject);
		
		$completeProject1 = $this->model('project')->where('project.complete=? and uid=?',[1,$uid])->select();
		$completeProject2 = $this->model('project')->table('project_user','left join','project_user.project_id=project.id')->where('project_user.user_id=? and project.complete=? and project.isdelete=?',[$uid,1,0])->select('project.*');
		$this->assign('completeProject', array_merge($completeProject1,$completeProject2));
		
		return $this;
	}
	
	function dustbin()
	{
		$userHelper = new user();
		$uid = $userHelper->getUserId();
		if (empty($uid))
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$filter = [
			'uid' => $userHelper->getUserId(),
			'isdelete' => 1,
		];
		$dustbinProject = $this->model('project')->fetch($filter);
		$this->assign('dustbinProject', $dustbinProject);
		
		$filter = [
			'isdelete' => 1,
			'uid' => $userHelper->getUserId(),
			'parameter' => '`group`.*'
		];
		$dustbinGroup = $this->model('group')->fetchAll($filter);
		$this->assign('dustbinGroup', $dustbinGroup);
		
		return $this;
	}
	
	function group()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$filter = [
			'pid' => $id,
			'isdelete' => 0,
			'sort'=>['sort','asc'],
		];
		$group = $this->model('group')->fetch($filter);
		$this->assign('group', $group);
		return $this;
	}
	
	
	function file()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$project = $this->model('project')->where('id=?',[$id])->find();
		if (!empty($project))
		{
			$group = $this->model('group')->where('pid=?',[$id])->where('isdelete=?',[0])->orderby('sort','asc')->select();
			$this->assign('group', $group);
			
			$this->assign('project', $project);
			
			$gid = [];
			foreach ($group as $g)
			{
				$gid[] = $g['id'];
			}
			
			$userHelper = new user();
			$this->model('api')->where('gid in (?)',$gid)->where('api.isdelete=?',[0]);
			$uid = $userHelper->getUserId();
			if (empty($uid))
				$uid = 'null';
			$api = $this->model('api')->select('api.*,(select time from api_user where  api_id = api.id and user_id='.$uid.' or user_id is null limit 1) as accesstime');
			$this->assign('api', $api);
			
			$file = $this->model('file')->table('user','left join','user.id=file.uid')->where('pid=? and isdelete=?',[$id,0])->orderby('uploadtime','desc')->select('file.*,user.username as user');
			$this->assign('file', $file);
			return $this;
		}
	}
	
	function module()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$project = $this->model('project')->where('id=?',[$id])->find();
		if (!empty($project))
		{
			$group = $this->model('group')->where('pid=?',[$id])->where('isdelete=?',[0])->orderby('sort','asc')->select();
			$this->assign('group', $group);
			
			$this->assign('project', $project);
			
			$gid = [];
			foreach ($group as $g)
			{
				$gid[] = $g['id'];
			}
			
			$userHelper = new user();
			$this->model('api')->where('gid in (?)',$gid)->where('api.isdelete=?',[0]);
			$uid = $userHelper->getUserId();
			if (empty($uid))
				$uid = 'null';
			$api = $this->model('api')->select('api.*,(select time from api_user where  api_id = api.id and user_id='.$uid.' or user_id is null limit 1) as accesstime');
			$this->assign('api', $api);
			
			$this->assign('c_user_id', $uid);
			
			$module = $this->model('module')->where('pid=?',[$id])->where('isdelete=?',[0])->select();
			foreach ($module as &$m)
			{
				$m['parameter'] = $this->model('module_parameter')->where('mid=?',[$m['id']])->select();
			}
			$this->assign('module', $module);
			
			return $this;
		}
	}
	
	function project()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$project = $this->model('project')->where('id=?',[$id])->find();
		if (!empty($project))
		{
			$owner = $this->model('user')->where('id=?',[$project['uid']])->find();
			$this->assign('owner', $owner);
			
			$project_user = $this->model('project_user')->table('user','left join','user.id=project_user.user_id')->where('project_user.project_id=?',[$id])->select('user.*');
			$this->assign('project_user', $project_user);
			
			$group = $this->model('group')->where('pid=?',[$id])->where('isdelete=?',[0])->orderby('sort','asc')->select();
			$this->assign('group', $group);
			
			$this->assign('project', $project);
			
			$gid = [];
			foreach ($group as $g)
			{
				$gid[] = $g['id'];
			}
			
			$userHelper = new user();
			$uid = $userHelper->getUserId();
			if (empty($uid))
				$uid = 'null';
			$api = $this->model('api')->where('gid in (?)',$gid)->where('api.isdelete=?',[0])->select();
			foreach ($api as &$a)
			{
				$time = $this->model('api_user')->where('api_id=? and user_id=?',[$a['id'],$uid])->find('time');
				if (isset($time['time']))
				{
					$a['accesstime'] = $time['time'];
				}
				else
				{
					$a['accesstime'] = 0;
				}
			}
			$this->assign('api', $api);
			
			return $this;
		}
	}
	
	function project_edit()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$project = $this->model('project')->where('id=?',[$id])->find();
		$this->assign('project', $project);
		return $this;
	}
	
	function create_api()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$group = $this->model('group')->where('id=?',[$id])->find();
		if(isset($group['pid']))
		{	
			$param_type = $this->getParamType();
			$this->assign('param_type', $param_type);
			
			$project = $this->model('project')->where('id=?',[$group['pid']])->find();
			$this->assign('project', $project);
			
			$group = $this->model('group')->where('pid=? and isdelete=?',[$group['pid'],0])->orderby('sort','asc')->select();
			$this->assign('group', $group);
			
			$gid = [];
			foreach ($group as $g)
			{
				$gid[] = $g['id'];
			}
			
			$userHelper = new user();
			$uid = $userHelper->getUserId();
			if (empty($uid))
				$uid = 'null';
			$this->model('api')->where('gid in (?)',$gid)->where('api.isdelete = ?',[0]);
			$api = $this->model('api')->select('api.*,(select time from api_user where  api_id = api.id and user_id='.$uid.' or user_id is null limit 1) as accesstime');
			$this->assign('api', $api);
			
			return $this;
		}
	}
	
	private function getParamType()
	{
		$path = './application/helper/';
		$paths = scandir($path);
		$name = array();
		array_walk($paths, function($file) use(&$name){
			if ($file!='..' && $file!='.')
			{
				$classname = '\\application\\helper\\'.pathinfo($file,PATHINFO_FILENAME);
				if (class_exists($classname,true))
				{
					$class = new $classname('test');
					if($class instanceof \system\core\parameter)
					{
						$name[] = pathinfo($file,PATHINFO_FILENAME);
					}
				}
			}
		});
		return $name;
	}
	
	
	function edit_api()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$api = $this->model('api')->where('id=? and isdelete=?',[$id,0])->find();
		if(!empty($api))
		{
			$param_type = $this->getParamType();
			$this->assign('param_type', $param_type);
			
			$this->assign('c_api', $api);
			
			$parameter = $this->model('parameter')->where('api_id=?',[$id])->select();
			$this->assign('parameter', $parameter);
			
			$project = $this->model('project')->table('group','left join','group.pid=project.id')->table('api','left join','api.gid=group.id')->where('api.id=?',[$id])->find('project.*');
			$this->assign('project', $project);
			
			$group = $this->model('group')->table('api','left join','group.id=api.gid')->where('group.isdelete=?',[0])->where('api.id=?',[$id])->find('`group`.pid,`group`.id,`group`.name');
			$this->assign('selectedGroup', $group);
			
			$userHelper = new user();
			$uid = $userHelper->getUserId();
			$this->model('api')->table('group','left join','group.id=api.gid')->where('group.pid=?',[$group['pid']])->where('api.isdelete = ?',[0]);
			$api = $this->model('api')->select('api.*,(select time from api_user where  api_id = api.id and user_id='.$uid.' or user_id is null limit 1) as accesstime');
			$this->assign('api', $api);
			
			$group = $this->model('group')->where('pid=? and isdelete=?',[$group['pid'],0])->orderby('group.sort','asc')->select();
			$this->assign('group', $group);

			return $this;
		}
	}
	
	function api()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		$api = $this->model('api')->where('id=?',[$id])->find();
		if(!empty($api))
		{
			$parameter = $this->model('parameter')->where('api_id=?',[$id])->select();
			$this->assign('parameter', $parameter);
			
			$project = $this->model('project')->table('group','left join','group.pid=project.id')->table('api','left join','api.gid=group.id')->where('api.id=?',[$id])->find('project.*');
			$this->assign('project', $project);
			
			$api['url'] = !empty($project['host'])?sprintf($api['url'],$project['host']):$api['url'];
			$this->assign('c_api', $api);
			
			$group = $this->model('group')->table('api','left join','group.id=api.gid')->where('api.id=? and group.isdelete=?',[$id,0])->find('`group`.pid,`group`.id,`group`.name');
			$this->assign('selectedGroup', $group);
			
			
			//加载所有的api和group
			$userHelper = new user();
			$uid = $userHelper->getUserId();
			if (empty($uid))
				$uid = 'null';
			$this->model('api')->table('group','left join','group.id=api.gid')->where('group.pid=?',[$group['pid']])->where('api.isdelete = ?',[0]);
			$api = $this->model('api')->select('api.*,(select time from api_user where  api_id = api.id and user_id='.$uid.' or user_id is null limit 1) as accesstime');
			$this->assign('api', $api);
			
			$group = $this->model('group')->where('group.isdelete=?',[0])->where('pid=?',[$group['pid']])->orderby('group.sort','asc')->select();
			$this->assign('group', $group);
			
			$userHelper = new user();
			$uid = $userHelper->getUserId();
			if ($userHelper->isLogin())
			{
				if(!empty($this->model('api_user')->where('api_id=? and user_id=?',[$id,$uid])->select()))
				{
					$this->model('api_user')->where('api_id=? and user_id=?',[$id,$uid])->update('time',$_SERVER['REQUEST_TIME']);
				}
				else 
				{
					$this->model('api_user')->insert([$id,$uid,$_SERVER['REQUEST_TIME']]);
				}
			}
			
			$question = $this->model('api_question')->table('user','left join','user.id=api_question.user_id')->where('api_id=?',[$id])->where('isdelete=?',[0])->orderby('api_question.createtime','desc')->select('api_question.*,user.username');
			$this->assign('question', $question);
			
			$this->assign('c_user_id', $userHelper->getUserId());
			
			$module = $this->model('api_module')->table('module','left join','module.id=api_module.module_id')->where('api_module.api_id=? and module.isdelete=?',[$id,0])->select('module.*');
			foreach ($module as &$m)
			{
				$m['parameter'] = $this->model('module_parameter')->where('mid=?',[$m['id']])->select();
			}
			$this->assign('module', $module);
			
			$moduleList = $this->model('module')->where('isdelete=?',[0])->select();
			$this->assign('moduleList', $moduleList);
			
			return $this;
		}
	}
	
	/**
	 * api测试页面
	 */
	function demo()
	{
		$userHelper = new user();
		if (!$userHelper->isLogin())
		{
			$this->response->setCode(302);
			$this->response->addHeader('Location',$this->http->url('',''));
		}
		
		$id = $this->get('id');
		
		$parameter = $this->model('parameter')->where('api_id=?',[$id])->select();
		$this->assign('parameter', $parameter);
		
		$project = $this->model('project')->table('group','left join','group.pid=project.id')->table('api','left join','api.gid=group.id')->where('api.id=?',[$id])->find('project.*');
		$this->assign('project', $project);
		
		$api = $this->model('api')->where('id=?',[$id])->find();
		$api['url'] = !empty($project['host'])?sprintf($api['url'],$project['host']):$api['url'];
		$this->assign('c_api', $api);
		
		
		$group = $this->model('group')->table('api','left join','group.id=api.gid')->where('api.id=?',[$id])->find('`group`.pid,`group`.id,`group`.name');
		$this->assign('selectedGroup', $group);
		
		$userHelper = new user();
		$uid = $userHelper->getUserId();
		if (empty($uid))
			$uid = 'null';
		$this->model('api')->table('group','left join','group.id=api.gid')->where('group.pid=?',[$group['pid']])->where('api.isdelete = ?',[0]);
		$api = $this->model('api')->select('api.*,(select time from api_user where  api_id = api.id and user_id='.$uid.' or user_id is null limit 1) as accesstime');	
		$this->assign('api', $api);
			
		$group = $this->model('group')->where('group.isdelete=?',[0])->where('pid=?',[$group['pid']])->orderby('group.sort','asc')->select();
		$this->assign('group', $group);
		
		return $this;
	}
}