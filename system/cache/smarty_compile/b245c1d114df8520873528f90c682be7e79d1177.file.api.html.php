<?php /* Smarty version Smarty-3.1.16, created on 2017-04-13 11:57:40
         compiled from "D:\wamp\www\api\application\template\front\api.html" */ ?>
<?php /*%%SmartyHeaderCode:31856d6aa619161d3-97428824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b245c1d114df8520873528f90c682be7e79d1177' => 
    array (
      0 => 'D:\\wamp\\www\\api\\application\\template\\front\\api.html',
      1 => 1492055858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31856d6aa619161d3-97428824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d6aa619ae4c7_42562800',
  'variables' => 
  array (
    'c_api' => 0,
    'VIEW_ROOT' => 0,
    'selectedGroup' => 0,
    'project' => 0,
    'parameter' => 0,
    'c_user_id' => 0,
    'module' => 0,
    'moduleList' => 0,
    'question' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d6aa619ae4c7_42562800')) {function content_56d6aa619ae4c7_42562800($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\api\\extends\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
</title>
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
/assets/umeditor/themes/default/css/umeditor.min.css" rel="stylesheet" type="text/css"/>
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
                                <span><?php echo $_smarty_tpl->tpl_vars['selectedGroup']->value['name'];?>
</span>
								<i class="fa fa-circle"></i>
                            </li>
							<li>
                                <span><?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
					
					<div id="responsive" class="modal fade" data-width="760" tabindex="-1" data-focus-on="input:first">
						<form class="form-horizontal" id="module_form" role="form">
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
								<input type="submit" class="btn green" value="保存">
							</div>
						</form>
					</div>
					
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">
						<?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
接口文档
                    </h3>
					<?php if (!empty($_smarty_tpl->tpl_vars['c_api']->value['description'])) {?>
					<div class="note note-danger">
                        <p> <?php echo $_smarty_tpl->tpl_vars['c_api']->value['description'];?>
 </p>
                    </div>
					<?php }?>
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-share font-dark"></i>
								<span class="caption-subject font-dark bold uppercase"><?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
</span>
							</div>
							<div class="actions">
								<?php if ($_smarty_tpl->tpl_vars['c_api']->value['debug']==1) {?>
								<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'demo','id'=>$_GET['id']),$_smarty_tpl);?>
">
									<i class="icon-cloud-upload"></i>
								</a>
								<?php }?>
								<?php if (isset($_SESSION['api_id'])&&$_SESSION['api_id']==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
								<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'edit_api','id'=>$_GET['id']),$_smarty_tpl);?>
">
									<i class="icon-wrench"></i>
								</a>
								<?php }?>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
								<?php if (isset($_SESSION['api_id'])&&$_SESSION['api_id']==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
								<a class="btn btn-circle btn-icon-only btn-default" id="remove">
									<i class="icon-trash"></i>
								</a>
								<?php }?>
							</div>
						</div>
						<div class="portlet-body">
							<h4><span class="label label-danger">版本号：<?php echo $_smarty_tpl->tpl_vars['c_api']->value['version'];?>
</span></h4>
							<h4><span class="label label-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c_api']->value['createtime'],'Y-m-d H:i:s');?>
</span></h4>
							<div class="alert alert-info"> <strong>接口地址:</strong> <?php echo $_smarty_tpl->tpl_vars['c_api']->value['url'];?>
 </div>
							<div class="alert alert-info"> <strong>请求方式:</strong> <?php echo $_smarty_tpl->tpl_vars['c_api']->value['method'];?>
 </div>
							<div class="alert alert-info"> <strong>加密方式:</strong> <?php echo $_smarty_tpl->tpl_vars['c_api']->value['param_type'];?>
 </div>
							<div class="alert alert-info"> <strong>请求参数:</strong> </div>
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th width="20%"> 参数名 </th>
										<th class="numeric"> 参数类型 </th>
										<th class="numeric"> 请求方式 </th>
										<th class="numeric"> 必须 </th>
										<th class="numeric"> 长度 </th>
										<th class="numeric"> 默认值 </th>
										<th class="numeric"> 测试值 </th>
										<th class="numeric"> 描述 </th>
									</tr>
								</thead>
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
										<td><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['method'];?>
</td>
										<td><?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['need']==1) {?>是<?php } else { ?>否<?php }?></td>
										<td><?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min']==0&&$_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max']==0) {?>
											不限
											<?php } elseif ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min']==0&&$_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max']!=0) {?>
												<?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='string') {?>最长<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>
位
												<?php } elseif ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='int') {?> 最大<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min'];?>
 ~ <?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>

												<?php }?>
											<?php } elseif ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min']!=0&&$_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max']==0) {?>
												<?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='string') {?>最小<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min'];?>
位
												<?php } elseif ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='int') {?> 最小<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min'];?>
 ~ <?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>

												<?php }?>
											<?php } elseif ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min']==$_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max']) {?>
												限定<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min'];?>
位
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min'];?>
 ~ <?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>

											<?php }?>
										</td>
										<td><?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['need']!=1) {?><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['dvalue'];?>
<?php }?></td>
										<td><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['demo'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['description'];?>
</td>
									</tr>
									<?php endfor; else: ?>
									<tr><td colspan="8">无参数</td></tr>
									<?php endif; ?>
								</tbody>
							</table>
							
							
							<div class="clearfix">
								<div class="row">
									<div class="col-md-6">
										<div class="alert alert-info"> <strong>响应示例:</strong> </div>
										<pre id="json"><?php echo $_smarty_tpl->tpl_vars['c_api']->value['response'];?>
</pre>
									</div>
									<div class="col-md-6 moduleList">
										<div class="alert alert-info"> <strong>参数说明:</strong> </div>
										
										<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
										<p class="clearfix">
											<button type="button" data-toggle="modal" href="#responsive" class="btn green-haze btn-outline sbold uppercase col-md-12">创建模型</button>
										</p>
										<?php }?>
										
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
										<div class="portlet box green module">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-gift"></i><?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['name'];?>
 </div>
												<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
												<div class="tools">
													<button class="btn-xs btn red btn-circle removeModule" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->getVariable('smarty')->value['section']['module']['index']]['id'];?>
">从该API中移除</button>
												</div>
												<?php }?>
											</div>
											<div class="portlet-body">
												<p>用户登陆接口</p>
												<table class="table parameter_table">
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
										<?php endfor; endif; ?>
										<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
										<div class="input-group createModuleBtn">
											<div class="input-icon">
												<i class="fa fa-lock fa-fw"></i>
												<select class="form-control" name="api"> 
													<option value="">无</option>
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['name'] = 'moduleList';
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['moduleList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['moduleList']['total']);
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['moduleList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['moduleList']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['moduleList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['moduleList']['index']]['name'];?>
</option>
													<?php endfor; endif; ?>
												</select>
											</div>
											<span class="input-group-btn">
												<button id="createModule" class="btn btn-success" type="button">
													<i class="fa fa-arrow-left fa-fw"></i> 添加其他模型 </button>
											</span>
										</div>
										<?php }?>
									</div>
								</div>
							</div>
							
							<div class="note note-danger">
								<h4 class="block">备注</h4>
								<p> <?php echo $_smarty_tpl->tpl_vars['c_api']->value['note'];?>
 </p>
							</div>
							<div class="timeline">
								<!-- TIMELINE ITEM -->
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['question'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['question']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['name'] = 'question';
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['question']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['question']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['question']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['question']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['question']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['question']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['question']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['question']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['question']['total']);
?>
								<div class="timeline-item">
									<div class="timeline-body" style="margin-left:0px;">
										<div class="timeline-body-arrow"> </div>
										<div class="timeline-body-head">
											<div class="timeline-body-head-caption">
												<a href="javascript:;" class="timeline-body-title font-blue-madison"><?php echo $_smarty_tpl->tpl_vars['question']->value[$_smarty_tpl->getVariable('smarty')->value['section']['question']['index']]['username'];?>
</a>
												<span class="timeline-body-time font-grey-cascade"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['question']->value[$_smarty_tpl->getVariable('smarty')->value['section']['question']['index']]['createtime'],'Y-m-d H:i:s');?>
</span>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['c_user_id']->value==$_smarty_tpl->tpl_vars['question']->value[$_smarty_tpl->getVariable('smarty')->value['section']['question']['index']]['user_id']) {?>
											<div class="timeline-body-head-actions">
												<div class="btn-group">
													<button class="btn btn-circle red btn-xs remove" data-id="<?php echo $_smarty_tpl->tpl_vars['question']->value[$_smarty_tpl->getVariable('smarty')->value['section']['question']['index']]['id'];?>
" type="button"> 删除
													</button>
												</div>
											</div>
											<?php }?>
										</div>
										<div class="timeline-body-content">
											<?php echo $_smarty_tpl->tpl_vars['question']->value[$_smarty_tpl->getVariable('smarty')->value['section']['question']['index']]['content'];?>

										</div>
									</div>
								</div>
								<?php endfor; endif; ?>
								<!-- END TIMELINE ITEM -->
							</div>
							<script id="container" name="container" style="width:100%;"></script>
							
							<button class="btn default green submit" style="margin-top:5px;">发表</button>
							
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
/assets/umeditor/umeditor.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/umeditor/umeditor.config.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/umeditor/lang/zh-cn/zh-cn.js"></script>
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
		
		window.um = UM.getEditor('container');
		
		$('.moduleList').on('click','.create',function(){
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
		
		$('.moduleList').on('keydown','.description',function(e){
			if(e.keyCode==13)
			{
				$(this).parents('tr').find('.name').trigger('focus');
				$(this).parents('tr').find('.create').trigger('click');
			}
		});
		
		$('.moduleList').on('click','.remove',function(){
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
		
		$('#module_form').on('submit',function(){
			var name = $(this).find('input[name=name]').val();
			var description = $(this).find('input[name=description]').val();
			var api = '<?php echo $_GET['id'];?>
';
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
',{name:name,description:description,api:api,parameter:parameter},function(response){
				if(response.code==1)
				{
					var tpl = '<div class="portlet box green module">'
								+	'<div class="portlet-title">'
								+	'	<div class="caption">'
								+	'		<i class="fa fa-gift"></i>'+response.body.name+'</div>'
								+	'	<div class="tools">'
								+	'		<button class="btn-xs btn red btn-circle removeModule" data-id="'+response.body.id+'">从该API中移除</button>'
								+	'	</div>'
								+	'</div>'
								+	'<div class="portlet-body">'
								+	'	<p>'+response.body.description+'</p>'
								+	'	<table class="table parameter_table">'
								+	'		<thead>'
								+	'			<tr>'
								+	'				<td>名称</td>'
								+	'				<td>样例</td>'
								+	'				<td>描述</td>'
								+	'				<td>操作</td>'
								+	'			</tr>'
								+	'		</thead>'
								+	'		<tbody>';
								if(response.body.parameter)
								{
									for(var i=0;i<response.body.parameter.length;i++)
									{
										tpl +=	'			<tr>'
										+	'				<td>'+response.body.parameter[i].name+'</td>'
										+	'				<td>'+response.body.parameter[i].value+'</td>'
										+	'				<td>'+response.body.parameter[i].description+'</td>'
										+	'				<td><button data-id="'+response.body.parameter[i].id+'" class="btn red default btn-circle btn-outline btn-tansparent btn-xs remove">删除</button></td>'
										+	'			</tr>';
									}
								}
								tpl +=	'<tr>'
											+'<td><input type="text" class="form-control input-sm name"></td>'
											+'<td><input type="text" class="form-control input-sm value"></td>'
											+'<td><input type="text" class="form-control input-sm description"></td>'
											+'<td><button data-id="'+response.body.id+'" class="btn green default btn-circle btn-outline btn-tansparent btn-xs create">添加</button></td>'
										+'</tr>';
								tpl +=	'		</tbody>'
								+	'	</table>'
								+	'</div>'
								+'</div>';
								
						$(tpl).insertBefore($('.createModuleBtn'));
						$('#responsive').modal('hide');
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
		
		$('#createModule').on('click',function(){
			var id = $('select[name=api]').val();
			if(id.length != 0)
			{
				$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'module','a'=>'create_api_module'),$_smarty_tpl);?>
',{api_id:'<?php echo $_GET['id'];?>
',id:id},function(response){
					if(response.code==1)
					{
						var tpl = '<div class="portlet box green module">'
								+	'<div class="portlet-title">'
								+	'	<div class="caption">'
								+	'		<i class="fa fa-gift"></i>'+response.body.name+'</div>'
								+	'	<div class="tools">'
								+	'		<button class="btn-xs btn red btn-circle removeModule" data-id="'+response.body.id+'">从该API中移除</button>'
								+	'	</div>'
								+	'</div>'
								+	'<div class="portlet-body">'
								+	'	<p>'+response.body.description+'</p>'
								+	'	<table class="table parameter_table">'
								+	'		<thead>'
								+	'			<tr>'
								+	'				<td>名称</td>'
								+	'				<td>样例</td>'
								+	'				<td>描述</td>'
								+	'				<td>操作</td>'
								+	'			</tr>'
								+	'		</thead>'
								+	'		<tbody>';
								for(var i=0;i<response.body.parameter.length;i++)
								{
									tpl +=	'			<tr>'
									+	'				<td>'+response.body.parameter[i].name+'</td>'
									+	'				<td>'+response.body.parameter[i].value+'</td>'
									+	'				<td>'+response.body.parameter[i].description+'</td>'
									+	'				<td><button data-id="'+response.body.parameter[i].id+'" class="btn red default btn-circle btn-outline btn-tansparent btn-xs remove">删除</button></td>'
									+	'			</tr>'
								}
								tpl +=	'<tr>'
											+'<td><input type="text" class="form-control input-sm name"></td>'
											+'<td><input type="text" class="form-control input-sm value"></td>'
											+'<td><input type="text" class="form-control input-sm description"></td>'
											+'<td><button data-id="'+response.body.id+'" class="btn green default btn-circle btn-outline btn-tansparent btn-xs create">添加</button></td>'
										+'</tr>';
								tpl +=	'		</tbody>'
								+	'	</table>'
								+	'</div>'
								+'</div>';
								
						$(tpl).insertBefore($('.createModuleBtn'));
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
							icon:'fa fa-check' // put icon class before the message
						});
					}
				});
			}
			return false;
		});
		
		$('#remove').on('click',function(){
			if(!window.confirm('确定删除？'))
			return false;
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'api','a'=>'remove'),$_smarty_tpl);?>
',{id:'<?php echo $_GET['id'];?>
'},function(response){
				if(response.code==1)
				{
					window.location = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project'),$_smarty_tpl);?>
&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
';
				}
			});
		});
		
		$('.moduleList').on('click','.removeModule',function(){
			var id = $(this).data('id');
			var ths = $(this);
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'module','a'=>'remove_api_module'),$_smarty_tpl);?>
',{module_id:id,api_id:'<?php echo $_GET['id'];?>
'},function(response){
				if(response.code==1)
				{
					ths.parents('.module').remove();
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
						icon:'fa fa-check' // put icon class before the message
					});
				}
			});
			return false;
		});
		
		var unixtotime = function(unixTime, isFull, timeZone) {
			if (typeof (timeZone) == 'number')
			{
				unixTime = parseInt(unixTime) + parseInt(timeZone) * 60 * 60;
			}
			var time = new Date(unixTime * 1000);
			var ymdhis = "";
			ymdhis += time.getUTCFullYear() + "-";
			ymdhis += (time.getUTCMonth()+1) + "-";
			ymdhis += time.getUTCDate();
			if (isFull === true)
			{
				ymdhis += " " + time.getUTCHours() + ":";
				ymdhis += time.getUTCMinutes() + ":";
				ymdhis += time.getUTCSeconds();
			}
			return ymdhis;
		}
		
		$('.timeline').on('click','.remove',function(){
			var id = $(this).data('id');
			var ths = $(this);
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'api','a'=>'remove_question'),$_smarty_tpl);?>
',{id:id},function(response){
				if(response.code==1)
				{
					ths.parents('.timeline-item').remove();
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
						icon:'fa fa-check' // put icon class before the message
					});
				}
			});
		});
		
		$('button.submit').on('click',function(){
			if(window.um.hasContents())
			{
				var id = '<?php echo $_GET['id'];?>
';
				$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'api','a'=>'question'),$_smarty_tpl);?>
',{id:id,content:window.um.getContent()},function(response){
					if(response.code==1)
					{
						var tpl = '<div class="timeline-item"><div class="timeline-body" style="margin-left:0px;"><div class="timeline-body-arrow"> </div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'+response.body.username+'</a><span class="timeline-body-time font-grey-cascade">'+unixtotime(response.body.createtime,true,8)+'</span></div><div class="timeline-body-head-actions"><div class="btn-group"><button class="btn btn-circle red btn-xs remove" data-id="'+response.body.id+'" type="button"> 删除 </button></div></div></div><div class="timeline-body-content">'+response.body.content+'</div></div></div>';
						$('.timeline').prepend(tpl);
						window.um.execCommand('cleardoc');;
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
							icon:'fa fa-check' // put icon class before the message
						});
					}
				});
			}
			return false;
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

		//var app = new APP();
		$('#json').html(APP.format($('#json').html()));
		</script>
    </body>

</html><?php }} ?>
