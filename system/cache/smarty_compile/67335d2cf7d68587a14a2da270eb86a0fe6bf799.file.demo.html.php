<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 15:22:49
         compiled from "D:\wamp\www\api\application\template\front\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:1202856d6cd0bb074d3-21572018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67335d2cf7d68587a14a2da270eb86a0fe6bf799' => 
    array (
      0 => 'D:\\wamp\\www\\api\\application\\template\\front\\demo.html',
      1 => 1493968964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202856d6cd0bb074d3-21572018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d6cd0bbc06f0_83237526',
  'variables' => 
  array (
    'VIEW_ROOT' => 0,
    'c_api' => 0,
    'selectedGroup' => 0,
    'group' => 0,
    'api' => 0,
    'parameter' => 0,
    'project' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d6cd0bbc06f0_83237526')) {function content_56d6cd0bbc06f0_83237526($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>接口测试</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/css/font.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
	
	<style>
	.display-none{
		display:none !important;
	}
	</style>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <?php echo $_smarty_tpl->getSubTemplate ('front/public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php echo $_smarty_tpl->getSubTemplate ('front/public/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <?php echo $_smarty_tpl->getSubTemplate ('front/public/style.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.php">首页</a>
                                <i class="fa fa-circle"></i>
                            </li>
							<li>
                                <a href="#">接口测试</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 接口测试
                        <small>在线接口测试</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject font-dark sbold uppercase">
									<!-- <?php echo $_smarty_tpl->tpl_vars['selectedGroup']->value['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
 -->
									<select class="form-control input-sm" id="api" >
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['g'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['g']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['name'] = 'g';
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['group']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total']);
?>
										<optgroup label="<?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['name'];?>
">
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['api']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
											<?php if ($_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['gid']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['id']) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id'];?>
" <?php if ($_GET['id']==$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['name'];?>
</option>
											<?php }?>
											<?php endfor; endif; ?>
										</optgroup>
										<?php endfor; endif; ?>
									</select>
								</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal" id="demo" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-1 control-label">接口地址</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="url" value="<?php echo $_smarty_tpl->tpl_vars['c_api']->value['url'];?>
">
											<span class="help-block"> 接口地址 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">参数</label>
										<div class="col-md-9">
											<table class="table table-bordered table-striped table-condensed flip-content" id="parameter">
												<tr><td>参数名</td><td>提交方式</td><td>参数值</td></tr>
												<tbody>
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['name'] = 'parameter';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['parameter']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['total']);
?>
												<tr>
													<td><input type="text" class="form-control key" name="key" value="<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['name'];?>
"></td>
													<td><select class="form-control method" name="method"><option value="post" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['method']=='post') {?>selected=selected<?php }?>>POST</option><option value="get" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['method']=='get') {?>selected=selected<?php }?>>GET</option></select></td>
													<td><input class="form-control value" type="text" name="value" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['demo']);?>
"></td>
												</tr>
												<?php endfor; endif; ?>
												<tr>
													<td><input type="text" class="form-control key" name="key"></td>
													<td><select class="form-control method" name="method"><option value="post">POST</option><option value="get">GET</option></select></td>
													<td><input class="form-control value" type="text" name="value"></td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">响应结果</label>
										<div class="col-md-9">
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#body" data-toggle="tab" aria-expanded="true"> 响应内容 </a>
												</li>
												<li class="">
													<a href="#header" data-toggle="tab" aria-expanded="false"> 响应头 </a>
												</li>
												<li class="display-none">
													<a><span class="badge badge-default" id="last_msec"> 5MS </span></a>
												</li>
												<?php if (isset($_SESSION['api_id'])&&$_SESSION['api_id']==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
												<li class="display-none">
													<a id="setExample">设为响应示例</a>
												</li>
												<?php }?>
											</ul>
											<div class="tab-content">
												<pre id="body" class="result tab-pane fade active in" style="min-height:100px;"></pre>
												<pre id="header" class="header tab-pane fade in" style="min-height:100px;"></pre>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">携带cookie</label>
										<div class="col-md-9">
											<input type="checkbox" name="api_with_cookie" checked="checked">
											<span class="help-block"> 将上次保存的cookie跟随参数一起发送 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">刷新cookie</label>
										<div class="col-md-9">
											<input type="checkbox" name="api_refresh_cookie" checked="checked">
											<span class="help-block"> 将本次请求得到的cookie保存起来 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">超时设置</label>
										<div class="col-md-2">
											<input type="text" class="form-control" name="api_timeout" value="5" placeholder="单位秒">
											<span class="help-block"> 设置接口超时时间 </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">提交</button>
											<button type="reset" class="btn default">重置</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <?php echo $_smarty_tpl->getSubTemplate ('front/public/slider.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php echo $_smarty_tpl->getSubTemplate ('front/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
		<script type="text/javascript">
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN':'<?php echo $_smarty_tpl->tpl_vars['x_csrf_token']->value;?>
'
			}
		});
		
		$('#parameter').on('focus','input[name=key]:last',function(){
			var tr = $(this).parents('tr').clone();
			tr.insertAfter($(this).parents('tr'));
		});
		
		var APP=function(){
			var format=function(json){
				var reg=null,
					result='';
					pad=0,
					PADDING='    ';
				if (typeof json !== 'string') {
					json = JSON.stringify(json);
				} else {
					json = JSON.parse(json);
					json = JSON.stringify(json);
				}
				// 在大括号前后添加换行
				reg = /([\{\}])/g;
				json = json.replace(reg, '\r\n$1\r\n');
				// 中括号前后添加换行
				reg = /([\[\]])/g;
				json = json.replace(reg, '\r\n$1\r\n');
				// 逗号后面添加换行
				reg = /(\,)/g;
				json = json.replace(reg, '$1\r\n');
				// 去除多余的换行
				reg = /(\r\n\r\n)/g;
				json = json.replace(reg, '\r\n');
				// 逗号前面的换行去掉
				reg = /\r\n\,/g;
				json = json.replace(reg, ',');
				//冒号前面缩进
				reg = /\:/g;
				json = json.replace(reg, ': ');
				//对json按照换行进行切分然后处理每一个小块
				$.each(json.split('\r\n'), function(index, node) {
					var i = 0,
						indent = 0,
						padding = '';
					//这里遇到{、[时缩进等级加1，遇到}、]时缩进等级减1，没遇到时缩进等级不变
					if (node.match(/\{$/) || node.match(/\[$/)) {
						indent = 1;
					} else if (node.match(/\}/) || node.match(/\]/)) {
						if (pad !== 0) {
							pad -= 1;
						}
					} else {
						indent = 0;
					}
					   //padding保存实际的缩进
					for (i = 0; i < pad; i++) {
						padding += PADDING;
					}
					//添加代码高亮
					node = node.replace(/([\{\}])/g,"<span class='ObjectBrace'>$1</span>");
					node = node.replace(/([\[\]])/g,"<span class='ArrayBrace'>$1</span>");
					node = node.replace(/(\".*\")(\:)(.*)(\,)?/g,"<span class='PropertyName'>$1</span>$2$3$4");
					node = node.replace(/\"([^"]*)\"(\,)?$/g,"<span class='String'>\"$1\"</span><span class='Comma'>$2</span>");
					node = node.replace(/(-?\d+)(\,)?$/g,"<span class='Number'>$1</span><span class='Comma'>$2</span>");
					result += padding + node + '<br>';
					pad += indent;
				});
				return result;
			};
			return {
				"format":format,
			};
		}();
		
		function htmlspecialchars(str)    
		{    
			var s = "";  
			if (str.length == 0) return "";  
			for   (var i=0; i<str.length; i++)  
			{  
				switch (str.substr(i,1))  
				{  
					case "<": s += "&lt;"; break;  
					case ">": s += "&gt;"; break;  
					case "&": s += "&amp;"; break;  
					case " ":  
						if(str.substr(i + 1, 1) == " "){  
							s += " &nbsp;";  
							i++;  
						} else s += " ";  
						break;  
					case "\"": s += "&quot;"; break;  
					case "\n": s += "<br>"; break;  
					default: s += str.substr(i,1); break;  
				}  
			}  
			return s;  
		}
		
		var global_last_request_response = {};
		
		$('#setExample').on('click',function(){
			if($(this).hasClass('display-none'))
			{
				return false;
			}
			$.post('./index.php?m=ajax&c=api&a=setResponse',{id:'<?php echo $_GET['id'];?>
',response:global_last_request_response.content},function(response){
				$('#setExample').parents('li').addClass('display-none');
			});
			return false;
		});
		
		$('#demo').on('submit',function(){
			var key_input = $('table tbody .key');
			var value_input = $('table tbody .value');
			var method_input = $('table tbody .method');
			
			var url = $('input[name=url]').val();
			
			var obj = {
				url:url,
				api_with_cookie:$('input[name=api_with_cookie]:checked').length,
				api_refresh_cookie:$('input[name=api_refresh_cookie]:checked').length,
				param_type:'<?php echo $_smarty_tpl->tpl_vars['c_api']->value['param_type'];?>
',
				api_timeout:parseInt($('input[name=api_timeout]').val()),
			};
			
			obj.get = {};
			obj.post = {};
			obj['get'] = {};
			obj['post'] = {};
			
			$.each(key_input,function(index,value){
				if($.trim($(value).val()).length != 0)
				{
					var request_value = $(value_input[index]).val();
					var request_method = $(method_input[index]).val()
					switch(request_method)
					{
						case 'post':
							obj['post'][$(value).val()] = request_value;
							break;
						case 'get':
							obj['get'][$(value).val()] = request_value;
							break;
					}
				}
			});
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'api','a'=>'demo'),$_smarty_tpl);?>
',obj,function(response){
				try{
					if(response.code==1)
					{
						global_last_request_response = response.body;
						$('#last_msec').html(global_last_request_response.last_msec+' ms').parents('li').removeClass('display-none');
						$('.header').html(global_last_request_response.header);
						if(response.content_type == 'image')
						{
							$('.result').html('<img src="'+global_last_request_response.content+'">');
						}
						else
						{
							$('#setExample').parents('li').removeClass('display-none');
							$('.result').html(APP.format(global_last_request_response.content));
						}
					}
					else if(response.code==1001)
					{
						global_last_request_response = {};
						$('.result').html('Sorry!请求超时');
						$('.header').html('Sorry!请求超时');
						$('#last_msec').html(parseInt($('input[name=api_timeout]').val())*1000+' ms').parents('li').removeClass('display-none');
					}
				}
				catch(err)
				{
					$('#last_msec').html(global_last_request_response.last_msec+' ms').removeClass('display-none');
					$('.header').html(global_last_request_response.header);
					$('.result').html(htmlspecialchars(global_last_request_response.content));
				}
			});
			return false;
		});
		
		$('#api').on('change',function(){
			window.location = './index.php?a=demo&id='+$(this).val();
		});
		
		</script>
    </body>

</html><?php }} ?>
