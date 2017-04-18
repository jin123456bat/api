<?php /* Smarty version Smarty-3.1.16, created on 2017-04-18 12:08:47
         compiled from "D:\wamp\www\api\application\template\front\project.html" */ ?>
<?php /*%%SmartyHeaderCode:913456d55c79b27c94-76643037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd92f952f1413212f594438f8061d5d75b0d9d9b5' => 
    array (
      0 => 'D:\\wamp\\www\\api\\application\\template\\front\\project.html',
      1 => 1492488526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '913456d55c79b27c94-76643037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d55c79ca4363_00822846',
  'variables' => 
  array (
    'project' => 0,
    'VIEW_ROOT' => 0,
    'owner' => 0,
    'project_user' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d55c79ca4363_00822846')) {function content_56d55c79ca4363_00822846($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
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
/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
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
		.badge-warning{
			cursor: pointer;
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
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project_list'),$_smarty_tpl);?>
">项目列表</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> <?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>

                        <small>项目介绍</small>
                    </h3>
					
					
					
					<div class="clearfix" style="margin-bottom:10px;">
						<div class="form-group">
							
							
							
							<div class="col-sm-4">
								<select name="uid" class="form-control js-data-example-ajax">
									<option selected="selected">输入用户名选择</option>
								</select>
							</div>
							<div class="col-sm-1">
							<button type="button" class="col-md-12 btn green-haze btn-outline sbold uppercase addUser">添加成员</button>
							</div>
							<?php if (isset($_SESSION['api_id'])&&$_SESSION['api_id']==$_smarty_tpl->tpl_vars['project']->value['uid']) {?>
							<div class="col-sm-1">
								<button type="button" class="col-md-12 btn dark btn-outline sbold uppercase edit">编辑项目</button>
							</div>
							<div class="col-sm-1">
								<button type="button" class="col-md-12 btn blue btn-outline sbold uppercase group">编辑分类</button>
							</div>
							<div class="col-sm-1 pull-right">
							<button type="button" class="col-md-12 btn red-mint btn-outline sbold uppercase remove">删除项目</button>
							</div>
							<?php }?>
						</div>
					</div>
					
					<div class="note note-danger user_list">
						<span class="badge badge-danger" data-uid="<?php echo $_smarty_tpl->tpl_vars['owner']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['owner']->value['username'];?>
 </span>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['name'] = 'project_user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['project_user']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['project_user']['total']);
?>
						<span class="badge badge-warning" data-uid="<?php echo $_smarty_tpl->tpl_vars['project_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project_user']['index']]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['project_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project_user']['index']]['username'];?>
 </span>
						<?php endfor; endif; ?>
                    </div>
					
					<!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
					<?php if (!empty($_smarty_tpl->tpl_vars['project']->value['description'])) {?>
                    <div class="note note-info">
                        <p> <?php echo $_smarty_tpl->tpl_vars['project']->value['description'];?>
 </p>
                    </div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['project']->value['introduction'])) {?>
					<pre>
						<?php echo $_smarty_tpl->tpl_vars['project']->value['introduction'];?>

					</pre>
					<?php }?>
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
		<script src="<?php echo $_smarty_tpl->tpl_vars['VIEW_ROOT']->value;?>
/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
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
		$(document).ready(function(e) {
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN':'<?php echo $_smarty_tpl->tpl_vars['x_csrf_token']->value;?>
'
				}
			});
			
			$.fn.modal.Constructor.prototype.enforceFocus = function () { };
			
			function formatRepo(repo) {
				var markup = "<div class='select2-result-repository clearfix'>" +
					//"<div class='select2-result-repository__avatar'><img src='" + 'gravatar' + "' /></div>" +
					"<div class='select2-result-repository__meta'>" +
					"<div class='select2-result-repository__title'>" + repo.username + "</div>";
	
				if (repo.description) {
					markup += "<div class='select2-result-repository__description' style='z-index:999999;'>" + 'description' + "</div>";
				}
	
				/*markup += "<div class='select2-result-repository__statistics'>" +
					"<div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> " + 'repo.forks_count' + " Forks</div>" +
					"<div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> " + 'repo.stargazers_count' + " Stars</div>" +
					"<div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> " + 'repo.watchers_count' + " Watchers</div>" +
					"</div>" +
				  */
				markup += "</div></div>";
	
				return markup;
			}
			
			function formatRepoSelection(repo) {
				return repo.username;
			}
	
			$(".js-data-example-ajax").select2({
				placeholder: "输入用户名",
				width: "on",
				language: {
				   noResults: function(){
					   return "没有找到任何匹配项";
				   },
				   inputTooShort:function(){
					   return '请输入用户名称';
					},
					searching:function(){
						return '正在努力搜索...';
					},
					loadingMore:function(){
						return '载入更多...';
					},
					inputTooLong:function(){
						return '输入太多了...';
					}
				},
				ajax: {
					url: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'user','a'=>'search'),$_smarty_tpl);?>
",
					dataType: 'json',
					delay: 0,
					data: function(params) {
						return {
							username: params.term, // search term
							page: params.page
						};
					},
					processResults: function(data, page) {
						// parse the results into the format expected by Select2.
						// since we are using custom formatting functions we do not need to
						// alter the remote JSON data
						return {
							results: data.body
						};
					},
					cache: true
				},
				escapeMarkup: function(markup) {
					return markup;
				}, // let our custom formatter work
				minimumInputLength: 1,
				templateResult: formatRepo,
				templateSelection: formatRepoSelection
			});
			
			$('.remove').on('click',function(){
				if(window.confirm('删除项目会删除与该项目有关的所有数据'))
				{
					$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'project','a'=>'remove'),$_smarty_tpl);?>
',{id:'<?php echo $_GET['id'];?>
'},function(response){
						if(response.code==1)
						{
							window.location = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project_list'),$_smarty_tpl);?>
';
						}
					});
				}
			});
			
			$('.edit').on('click',function(){
				window.location = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project_edit','id'=>$_GET['id']),$_smarty_tpl);?>
';
			});
			
			$('.addUser').on('click',function(){
				var uid = $('select[name=uid]').val();
				if(uid.length == 0 || uid == '0')
				return false;
				var pid = '<?php echo $_GET['id'];?>
';
				$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'project','a'=>'addUser'),$_smarty_tpl);?>
',{pid:pid,uid:uid},function(response){
					if(response.code==1)
					{
						var name = $('.select2-selection__rendered').html();
						var tpl = '<span class="badge badge-warning" data-uid="'+uid+'"> '+name+' </span>';
						$('.user_list').append(tpl);
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
			});
			
			$('.user_list').on('click','.badge-warning',function(){
				var uid = $(this).data('uid');
				$.post('./index.php?m=ajax&c=project&a=removeUser',{pid:'<?php echo $_GET['id'];?>
',uid:uid},function(response){
					if(response.code!=1)
					{
						alert(response.result);
					}
				});
				$(this).remove();
			});
			
			$('.group').on('click',function(){
				window.location = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'group','id'=>$_GET['id']),$_smarty_tpl);?>
';
			});
		});
		</script>
    </body>

</html><?php }} ?>
