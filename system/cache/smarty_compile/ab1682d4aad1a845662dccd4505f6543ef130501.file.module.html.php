<?php /* Smarty version Smarty-3.1.16, created on 2016-03-22 17:09:37
         compiled from "/var/www/api/application/template/front/module.html" */ ?>
<?php /*%%SmartyHeaderCode:70991219656f10bd101fc67-40484263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1682d4aad1a845662dccd4505f6543ef130501' => 
    array (
      0 => '/var/www/api/application/template/front/module.html',
      1 => 1458637475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70991219656f10bd101fc67-40484263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VIEW_ROOT' => 0,
    'group' => 0,
    'api' => 0,
    'c_user_id' => 0,
    'project' => 0,
    'module' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56f10bd10d1705_67609877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f10bd10d1705_67609877')) {function content_56f10bd10d1705_67609877($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>数据模型</title>
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
		<link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
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
                                <span>数据模型</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 数据模型
                        <small>数据模型</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="note note-info">
                        <p> 描述了接口返回数据中所有字段的含义和样例 </p>
                    </div>
					
					<div id="responsive" class="modal fade" data-width="760" tabindex="-1" data-focus-on="input:first">
						<form class="form-horizontal" id="module" role="form">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">创建模型</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="col-md-2 control-label">名称</label>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="名称" name="name">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">介绍</label>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="介绍" name="description">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">关联API</label>
									<div class="col-md-10">
										<select name="api" class="form-control">
											<option value="">无</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['group'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['group']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['name'] = 'group';
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['group']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total']);
?>
											<optgroup label="<?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['name'];?>
">
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['api'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['api']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['name'] = 'api';
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['api']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['api']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['api']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['api']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['api']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['api']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['api']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['api']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['api']['total']);
?>
													<?php if ($_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['gid']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id']) {?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['name'];?>
</option>
													<?php }?>
												<?php endfor; endif; ?>
											</optgroup>
											<?php endfor; endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">参数列表</label>
									<div class="col-md-10">
										<table class="table table-hover">
											<thead>
												<tr><th>参数名</th><th>参数值</th><th>参数说明</th></tr>
											</thead>
											<tbody>
												<tr class="parameter">
													<td><input type="text" class="form-control input-sm name"></td>
													<td><input type="text" class="form-control input-sm value"></td>
													<td><input type="text" class="form-control input-sm description"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn btn-outline dark">关闭</button>
								<button type="submit" class="btn green submit">保存</button>
							</div>
						</form>
					</div>
					
					<div class="row">
                        <div class="col-md-12">
							<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
							<p>
								<button type="button" data-toggle="modal" href="#responsive" class="btn green-haze btn-outline sbold uppercase">创建模型</button>
							</p>
							<?php }?>
                            <!-- BEGIN Portlet PORTLET-->
							<div class="row">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['module'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['module']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['name'] = 'module';
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['module']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['module']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['module']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['module']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['module']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['module']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['module']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['module']['total']);
?>
								<div class="col-md-4">
									<!-- BEGIN Portlet PORTLET-->
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i><?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['name'];?>
 </div>
											<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
											<div class="tools">
												<button class="btn-xs btn red btn-circle removeModule" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['id'];?>
">删除</button>
											</div>
											<?php }?>
										</div>
										<div class="portlet-body">
											<?php if (!empty($_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['module']['index']]['description'])) {?>
											<p><?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['description'];?>
</p>
											<?php }?>
											<table class="table" id="parameter_table">
												<thead>
													<tr>
														<td>名称</td>
														<td>样例</td>
														<td>描述</td>
														<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
														<td>操作</td>
														<?php }?>
													</tr>
												</thead>
												<tbody>
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['name'] = 'parameter';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parameter']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['parameter']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
														<td><?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['parameter'][$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['name'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['parameter'][$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['value'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['parameter'][$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['description'];?>
</td>
														<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
														<td><button data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['parameter'][$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['id'];?>
" class="btn red default btn-circle btn-outline btn-tansparent btn-xs remove">删除</button></td>
														<?php }?>
													</tr>
													<?php endfor; endif; ?>
													<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
													<tr>
														<td><input type="text" class="form-control input-sm name"></td>
														<td><input type="text" class="form-control input-sm value"></td>
														<td><input type="text" class="form-control input-sm description"></td>
														
														<td><button data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['id'];?>
" class="btn green default btn-circle btn-outline btn-tansparent btn-xs create">添加</button></td>
														
													</tr>
													<?php }?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- END Portlet PORTLET-->
								</div>
								<?php endfor; endif; ?>
							</div>
                            <!-- END Portlet PORTLET-->
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
		<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
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
		
		$('.removeModule').on('click',function(){
			var id = $(this).data('id');
			var ths = $(this);
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'module','a'=>'remove'),$_smarty_tpl);?>
',{id:id},function(response){
				if(response.code==1)
				{
					ths.parents('.col-md-4').remove();
				}
				else
				{
					App.alert({
						container: $('#alert_container').val(), // alerts parent container 
						place: 'append', // append or prepent in container 
						type: 'danger', // alert's type 
						message: response.result,
						close: true,
						focus: true, // auto scroll to the alert after shown
						closeInSeconds: 3, // auto close after defined seconds 
						icon:'fa fa-remove' // put icon class before the message
					});
				}
			});
			return false;
		});
		
		$('.create').on('click',function(){
			var parameter = {
				id:$(this).data('id'),
				name:$(this).parents('tr').find('.name').val(),
				value:$(this).parents('tr').find('.value').val(),
				description:$(this).parents('tr').find('.description').val(),
			};
			var ths = $(this);
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'module','a'=>'create_parameter'),$_smarty_tpl);?>
',parameter,function(response){
				if(response.code==1)
				{
					var tpl = '<tr><td>'+response.body.name+'</td><td>'+response.body.value+'</td><td>'+response.body.description+'</td><td><button data-id="'+response.body.id+'" class="btn red default btn-circle btn-outline btn-tansparent btn-xs remove">删除</button></td></tr>';
					$(tpl).insertBefore(ths.parents('tr'));
					ths.parents('tr').find('input').val('');
				}
				else
				{
					App.alert({
						container: $('#alert_container').val(), // alerts parent container 
						place: 'append', // append or prepent in container 
						type: 'danger', // alert's type 
						message: response.result,
						close: true,
						focus: true, // auto scroll to the alert after shown
						closeInSeconds: 3, // auto close after defined seconds 
						icon:'fa fa-remove' // put icon class before the message
					});
				}
			});
			return false;
		});
		
		$('.parameter').on('focus','.name:last',function(){
			var tr = $(this).parents('tr').clone();
			tr.insertBefore($(this).parents('tr'));
			tr.find('.name').trigger('focus');
		});
		
		$('#parameter_table').on('click','.remove',function(){
			var id = $(this).data('id');
			var ths = $(this);
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'module','a'=>'remove_parameter'),$_smarty_tpl);?>
',{id:id},function(response){
				if(response.code==1)
				{
					ths.parents('tr').remove();
				}
				else
				{
					App.alert({
						container: $('#alert_container').val(), // alerts parent container 
						place: 'append', // append or prepent in container 
						type: 'danger', // alert's type 
						message: response.result,
						close: true,
						focus: true, // auto scroll to the alert after shown
						closeInSeconds: 3, // auto close after defined seconds 
						icon:'fa fa-remove' // put icon class before the message
					});
				}
			});
			return false;
		});

		
		$('#module').on('submit',function(){
			var name = $(this).find('input[name=name]').val();
			var description = $(this).find('input[name=description]').val();
			var api = $(this).find('select[name=api]').val();
			var parameter = [];
			
			$.each($(this).find('.parameter'),function(index,value){
				if($.trim($(value).find('input.name').val()).length != 0)
				{
					var temp = {
						name:$.trim($(value).find('input.name').val()),
						value:$.trim($(value).find('input.value').val()),
						description:$.trim($(value).find('input.description').val()),
					};
					parameter.push(temp);
				}
			});
			
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'module','a'=>'create'),$_smarty_tpl);?>
',{id:'<?php echo $_GET['id'];?>
',name:name,description:description,api:api,parameter:parameter},function(response){
				if(response.code==1)
				{
					window.location.reload();
				}
				else
				{
					App.alert({
						container: $('#alert_container').val(), // alerts parent container 
						place: 'append', // append or prepent in container 
						type: 'danger', // alert's type 
						message: response.result,
						close: true,
						focus: true, // auto scroll to the alert after shown
						closeInSeconds: 3, // auto close after defined seconds 
						icon:'fa fa-remove' // put icon class before the message
					});

				}
			});
			return false;
		});
		</script>
    </body>

</html><?php }} ?>
