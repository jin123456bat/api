<?php /* Smarty version Smarty-3.1.16, created on 2016-04-06 15:55:40
         compiled from "/var/www/api/application/template/front/edit_api.html" */ ?>
<?php /*%%SmartyHeaderCode:135321690856d945f8c0d877-04669733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c010f8a1c7754801dcb7db7765ee545298c46f' => 
    array (
      0 => '/var/www/api/application/template/front/edit_api.html',
      1 => 1459929293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135321690856d945f8c0d877-04669733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d945f8cc96c8_04047058',
  'variables' => 
  array (
    'c_api' => 0,
    'VIEW_ROOT' => 0,
    'parameter' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d945f8cc96c8_04047058')) {function content_56d945f8cc96c8_04047058($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
 | 修改文档</title>
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
                                <span>项目列表</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 修改文档
                        <small>修改<?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
文档</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-settings font-dark"></i>
								<span class="caption-subject font-dark sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
接口文档</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal" id="create_api" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-1 control-label">接口名称</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="api_name" value="<?php echo $_smarty_tpl->tpl_vars['c_api']->value['name'];?>
">
											<span class="help-block"> 接口名称. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">接口描述</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="description" value="<?php echo $_smarty_tpl->tpl_vars['c_api']->value['description'];?>
">
											<span class="help-block"> 调用描述等. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">接口地址</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="url" value="<?php echo $_smarty_tpl->tpl_vars['c_api']->value['url'];?>
">
											<span class="help-block"> 接口url.使用%s代替请求域名 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">请求方式</label>
										<div class="col-md-9">
											<div class="radio-list">
												<label class="radio-inline">
													<input type="radio" name="api_method" value="post" <?php if ($_smarty_tpl->tpl_vars['c_api']->value['method']=='post') {?>checked="checked"<?php }?>> POST </label>
												<label class="radio-inline">
													<input type="radio" name="api_method" value="get" <?php if ($_smarty_tpl->tpl_vars['c_api']->value['method']=='get') {?>checked="checked"<?php }?>> GET </label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">版本号</label>
										<div class="col-md-9">
											<input type="number" class="form-control input-inline input-medium" name="version" value="<?php echo $_smarty_tpl->tpl_vars['c_api']->value['version']+1;?>
">
											<span class="help-inline"> 默认版本号. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">是否允许调试</label>
										<div class="col-md-9">
											<input type="checkbox" class="form-control input-inline input-medium" name="debug" <?php if ($_smarty_tpl->tpl_vars['c_api']->value['debug']==1) {?>checked="checked"<?php }?>>
											<span class="help-inline"> 开启可以使用内置调试器调试. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">请求参数</label>
										<div class="col-md-9">
											<table class="table table-bordered table-striped table-condensed flip-content" id="parameter">
											<tr><td>参数名</td><td>参数类型</td><td width="15%">请求方式</td><td width="5%">必须</td><td width="14%">长度</td><td>默认值</td><td>测试值</td><td>备注</td></tr>
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
											<tr><td>
												<input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['name'];?>
">
											</td><td>
												<select name="type" class="form-control">
													<option value="string" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='string') {?>selected="selected"<?php }?>>字符串</option>
													<option value="int" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='int') {?>selected="selected"<?php }?>>数字</option>
													<option value="array" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='array') {?>selected="selected"<?php }?>>数组</option>
													<option value="file" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['type']=='file') {?>selected="selected"<?php }?>>文件</option>
												</select>
											</td><td>
												<div class="radio-list">
													<label class="radio-inline" style="padding:0px;">
														<input type="radio" class="method" name="method[<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['name'];?>
]" value="post" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['method']=='post') {?>checked="checked"<?php }?>> POST </label>
													<label class="radio-inline" style="padding:0px;">
														<input type="radio" class="method" name="method[<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['name'];?>
]" value="get" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['method']=='get') {?>checked="checked"<?php }?>> GET </label>
												</div>
											</td><td><input type="checkbox" name="need" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['need']==1) {?>checked="checked"<?php }?>></td><td>
											
											<div class="input-group col-md-12">
												<input type="text" class="form-control col-md-1" name="length_min" value="<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_min'];?>
">
												<span class="input-group-addon"> ~ </span>
												<input type="text" class="form-control col-md-1" name="length_max" value="<?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['length_max'];?>
">
											</div>
											
											
											</td>
											<td><input type="text" name="dvalue" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['need']!=1) {?><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['dvalue'];?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['need']==1) {?>disabled="disabled"<?php }?>></td>
											<td><input type="text" name="demo" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['demo']);?>
" ></td>
											<td><textarea name="description" class="form-control" rows="1"><?php echo $_smarty_tpl->tpl_vars['parameter']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parameter']['index']]['description'];?>
</textarea></td></tr>
											<?php endfor; endif; ?>
											<tr><td>
												<input type="text" name="name" class="form-control">
											</td><td>
												<select name="type" class="form-control">
													<option value="string">字符串</option>
													<option value="int">数字</option>
													<option value="array">数组</option>
													<option value="file">文件</option>
												</select>
											</td><td>
												<div class="radio-list">
													<label class="radio-inline" style="padding:0px;">
														<input type="radio" class="method" name="method" value="post" checked=""> POST </label>
													<label class="radio-inline" style="padding:0px;">
														<input type="radio" class="method" name="method" value="get"> GET </label>
												</div>
											</td><td><input type="checkbox" name="need"></td><td>
											
											<div class="input-group col-md-12">
												<input type="text" class="form-control col-md-1" name="length_min">
												<span class="input-group-addon"> ~ </span>
												<input type="text" class="form-control col-md-1" name="length_max">
											</div>
											
											
											</td><td><input type="text" name="dvalue" class="form-control"></td><td><input type="text" name="demo" class="form-control"></td><td><textarea name="description" class="form-control" rows="1"></textarea></td></tr>
											</table>
											<span class="help-inline"> 参数列表. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">返回样例</label>
										<div class="col-md-9">
											<textarea class="form-control" name="response" rows="3"><?php echo $_smarty_tpl->tpl_vars['c_api']->value['response'];?>
</textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">调用说明</label>
										<div class="col-md-9">
											<textarea class="form-control" name="note" rows="3"><?php echo $_smarty_tpl->tpl_vars['c_api']->value['note'];?>
</textarea>
										</div>
									</div>
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-1 col-md-9">
											<button type="submit" class="btn green">保存</button>
											<button type="button" class="btn default" onClick="history.go(-1);">后退</button>
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

		$('#parameter').on('change','input[name=need]',function(){
			if($(this).is(':checked'))
			{
				$(this).parents('tr').find('input[name=dvalue]').attr('disabled','disabled');
			}
			else
			{
				$(this).parents('tr').find('input[name=dvalue]').removeAttr('disabled');
			}
		});
		
		$('#parameter').on('click','.method',function(){
			var name = $(this).attr('name');
			$(this).parents('td').find('.method').removeAttr('checked').parent().removeClass('checked');
			$(this).attr('checked','checked').parent().addClass('checked');
		});
		
		$('#parameter').on('focus','input[name=name]:last',function(){
			var tr = $(this).parents('tr').clone();
			tr.find('.method').attr('name','method'+Math.random());
			tr.insertAfter($(this).parents('tr'));
		});
		
		
		$('#parameter').on('change','input[type=checkbox]',function(){
			if($(this).is(':checked'))
			{
				$(this).parent().addClass('checked');
			}
			else
			{
				$(this).parent().removeClass('checked');
			}
		}).on('focus','input[type=checkbox]',function(){
			$(this).parents('.checker').addClass('focus');
		}).on('blur','input[type=checkbox]',function(){
			$(this).parents('.checker').removeClass('focus');
		}).on('mouseenter','input[type=checkbox]',function(){
			$(this).parents('.checker').addClass('hover');
		}).on('mouseout','input[type=checkbox]',function(){
			$(this).parents('.checker').removeClass('hover');
		});
		
		$('#create_api').on('submit',function(){
			var name = $(this).find('input[name=api_name]').val();
			var url = $(this).find('input[name=url]').val();
			var method = $(this).find('input[name=api_method]:checked').val();
			var version = $(this).find('input[name=version]').val();
			var response = $(this).find('textarea[name=response]').val();
			var description = $(this).find('input[name=description]').val();
			var note = $(this).find('textarea[name=note]').val();
			var debug = $(this).find('input[name=debug]:checked').length;
			
			
			var parameter = [];
			$.each($('#parameter').find('input[name=name]'),function(index,value){
				if($.trim($(value).val()).length != 0)
				{
					var tmp = {};
					tmp['name'] = $(value).parents('tr').find('input[name=name]').val();
					tmp['type'] = $(value).parents('tr').find('select[name=type]').val();
					tmp['method'] = $(value).parents('tr').find('.method[checked]').val();
					tmp['need'] = $(value).parents('tr').find('input[name=need]:checked').length;
					tmp['length_min'] = $(value).parents('tr').find('input[name=length_min]').val();
					tmp['length_max'] = $(value).parents('tr').find('input[name=length_max]').val();
					tmp['dvalue'] = $(value).parents('tr').find('input[name=dvalue]').val();
					tmp['demo'] = $(value).parents('tr').find('input[name=demo]').val();
					tmp['description'] = $(value).parents('tr').find('textarea[name=description]').val();
					parameter.push(tmp);
				}
			});
			
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'api','a'=>'edit'),$_smarty_tpl);?>
',{id:'<?php echo $_GET['id'];?>
',name:name,url:url,method:method,version:version,response:response,description:description,note:note,parameter:parameter,debug:debug},function(response){
				if(response.code==1)
				{
					window.location = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'api','id'=>$_GET['id']),$_smarty_tpl);?>
';
				}
				else
				{
					alert(response.result);
				}
			});
			return false;
		});
		</script>
    </body>

</html><?php }} ?>
