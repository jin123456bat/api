<?php /* Smarty version Smarty-3.1.16, created on 2016-03-03 15:07:53
         compiled from "D:\wamp\www\api\application\template\front\create_project.html" */ ?>
<?php /*%%SmartyHeaderCode:2923956d56781a46d50-22388107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '925122ce6844e4617b172bc811b56d3edc0d24c5' => 
    array (
      0 => 'D:\\wamp\\www\\api\\application\\template\\front\\create_project.html',
      1 => 1456988872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2923956d56781a46d50-22388107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d56781b64a97_09570459',
  'variables' => 
  array (
    'VIEW_ROOT' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d56781b64a97_09570459')) {function content_56d56781b64a97_09570459($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>创建项目</title>
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
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <?php echo $_smarty_tpl->getSubTemplate ('front/public/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- END SIDEBAR -->
            </div>
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
                                <span>创建项目</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 创建项目
                        <small>创建一个空项目</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-settings font-dark"></i>
								<span class="caption-subject font-dark sbold uppercase">创建项目</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal" id="create_project" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-2 control-label">项目名称</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="name" placeholder="项目名称">
											<span class="help-block"> 32个字以内. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">项目描述</label>
										<div class="col-md-9">
											<textarea class="form-control" name="description" rows="3"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputFile" class="col-md-2 control-label">项目LoGo</label>
										<div class="col-md-9">
											<input type="file" id="uploadinput">
											<input type="hidden" name="logo" value="">
											<p class="help-block"> 点击上传预览. </p>
											<img src="" class="img-rounded display-none img-prev" width="100" height="100">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">项目域名</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="host" placeholder="主机地址" value="">
											<span class="help-block"> 替换域名中的%s. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">项目前言</label>
										<div class="col-md-9">
											<script id="introduction" name="introduction" type="text/plain" style="width:100%;"></script>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-2 col-md-9">
											<button type="submit" class="btn green">创建</button>
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
		<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/umeditor/umeditor.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/umeditor/umeditor.config.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/umeditor/lang/zh-cn/zh-cn.js"></script>
		<script type="text/javascript">
		$(document).ready(function(e) {
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN':'<?php echo $_smarty_tpl->tpl_vars['x_csrf_token']->value;?>
'
				}
			});
			
			window.um = UM.getEditor('introduction');
			
			$('#create_project').validate({
				errorElement: 'span', //default input error message container
				errorClass: 'help-block', // default input error message class
				focusInvalid: false, // do not focus the last invalid input
				ignore: "",
				rules: {
					name:{
						required:true,
						maxlength:32,
					}
				},
	
				messages: { // custom messages for radio buttons and checkboxes
					name:{
						required:'请填写项目名称',
						maxlength:'32个字符以内'
					}
				},
	
				invalidHandler: function(event, validator) { //display error alert on form submit   
	
				},
	
				highlight: function(element) { // hightlight error inputs
					$(element)
						.closest('.form-group').addClass('has-error'); // set error class to the control group
				},
	
				success: function(label) {
					label.closest('.form-group').removeClass('has-error');
					label.remove();
				},
	
				errorPlacement: function(error, element) {
					if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
						error.insertAfter($('#register_tnc_error'));
					} else if (element.closest('.input-icon').size() === 1) {
						error.insertAfter(element.closest('.input-icon'));
					} else {
						error.insertAfter(element);
					}
				},
	
				submitHandler: function(form) {
					var name = $(form).find('input[name=name]').val();
					var description = $(form).find('textarea[name=description]').val();
					var logo = $(form).find('input[name=logo]').val();
					var host = $(form).find('input[name=host]').val();
					
					var introduction = window.um.getContent();
					
					$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'project','a'=>'create'),$_smarty_tpl);?>
',{name:name,description:description,logo:logo,host:host,introduction:introduction},function(response){
						if(response.code==1)
						{
							window.location = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project'),$_smarty_tpl);?>
';
						}
					});
				}
			});
		});
		
		$('#uploadinput').on('change',function(){
			var input = $(this);
			var file = $(this)[0].files[0];
			var formData = new FormData();
			formData.append('file',file);
			var xhr = new XMLHttpRequest();
			xhr.open('POST','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'common','a'=>'upload'),$_smarty_tpl);?>
',true);
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');//伪造ajax请请求
			xhr.setRequestHeader('X-CSRF-TOKEN', '<?php echo $_smarty_tpl->tpl_vars['x_csrf_token']->value;?>
');//伪造csrf验证
			xhr.onload = function(){  
				if(xhr.status == 200 && xhr.readyState == 4)  
				{
					var response = xhr.response;
					response = $.parseJSON(response);
					$('.img-prev').attr('src',response.body.path).removeClass('display-none');
					$('input[name=logo]').val(response.body.id);
				}
			};
			xhr.send(formData); 
			return false;
		});
		</script>
    </body>

</html><?php }} ?>
