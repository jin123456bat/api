<?php /* Smarty version Smarty-3.1.16, created on 2016-03-10 11:22:42
         compiled from "/var/www/api/application/template/front/group.html" */ ?>
<?php /*%%SmartyHeaderCode:113434115356e0e8829b0680-05991595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c05fdf6cd9fd283039606bd3d8b6509b409b0995' => 
    array (
      0 => '/var/www/api/application/template/front/group.html',
      1 => 1457061156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113434115356e0e8829b0680-05991595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VIEW_ROOT' => 0,
    'group' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56e0e882a12964_21288944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0e882a12964_21288944')) {function content_56e0e882a12964_21288944($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>分类管理</title>
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
/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
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
                                <span>分类管理</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 分类管理
                        <small>分类管理</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
					<style>
					.error{
						border:red 1px solid;
					}
					</style>
                    <table class="table table-bordered table-striped table-condensed flip-content">
						<thead>
							<th>分类名称</th>
							<th>排序</th>
							<th>操作</th>
						</thead>
						<tbody>
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
							<tr data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'];?>
"><td><a href="javascript:;" class="editable editable-click" data-original-title="新名称" data-pk="<?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'];?>
" data-type="text"><?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['name'];?>
</a></td><td name="sort"><?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['sort'];?>
</td><td><button class="btn btn-xs yellow btn-outline moveup">上移</button><button class="btn btn-xs yellow btn-outline movedown">下移</button><button class="btn btn-xs red btn-outline delete">删除</button></td></tr>
							<?php endfor; endif; ?>
							<tr><td><input type="text" class="form-control" name="name"><span style="color:red;" id="name-error" class="help-block display-none">请填写分类名称</span></td><td><input class="form-control" type="text" name="sort" value="0"></td><td><button class="btn btn-xs green btn-outline createGroup">添加</button></td></tr>
						</tbody>
					</table>
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
/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
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
			
			function sortTr()
			{
				var id = [];
				$.each($('tbody tr'),function(index,value){
					id.push($(value).data('id'));
				});
				$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'group','a'=>'sort'),$_smarty_tpl);?>
',{id:id},function(response){
					if(response.code==1)
					{
						$.each($('tbody tr'),function(index,value){
							$(value).find('td[name=sort]').html(index);
						});
					}
				});
			}
			
			$('tbody').on('click','.delete',function(){
				var ths = $(this);
				var id = ths.parents('tr').data('id');
				$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'group','a'=>'remove'),$_smarty_tpl);?>
',{id:id},function(response){
					if(response.code==1)
					{
						ths.parents('tr').remove();
						sortTr();
					}
				});
			});
			
			$('.editable').editable({
				url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'group','a'=>'rename'),$_smarty_tpl);?>
',
				type: 'text',
				name: 'name',
			});

			
			$('tbody').on('click','.moveup',function(){
				$(this).parents('tr').insertBefore($(this).parents('tr').prev());
				sortTr();
			});
			
			$('tbody').on('click','.movedown',function(){
				if($(this).parents('tr').next().find('input').length == 0)
				{
					$(this).parents('tr').insertAfter($(this).parents('tr').next());
				}
				sortTr();
			});
			
			$('.createGroup').on('click',function(){
				var name = $.trim($('input[name=name]').val());
				if(name.length == 0)
				{
					$('input[name=name]').addClass('error');
					$('#name-error').removeClass('display-none');
					return false;
				}
				else
				{
					$('input[name=name]').removeClass('error');
					$('#name-error').addClass('display-none');
				}
				var sort = parseInt($('input[name=sort]').val());
				$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'group','a'=>'create'),$_smarty_tpl);?>
',{pid:'<?php echo $_GET['id'];?>
',name:name,sort:sort},function(response){
					if(response.code==1)
					{
						var hasInsert = false;
						var tpl = '<tr data-id="'+response.body+'"><td>'+name+'</td><td name="sort">'+sort+'</td><td><button class="btn btn-xs yellow btn-outline moveup">上移</button><button class="btn btn-xs yellow btn-outline movedown">下移</button><button class="btn btn-xs red btn-outline delete">删除</button></td></tr>';
						$.each($('tr'),function(index,value){
							var search_sort = parseInt($(value).find('td[name=sort]').html());				
							if(search_sort==sort)
							{
								$(tpl).insertAfter($(value));
								hasInsert = true;
								return false;
							}
							else if(search_sort > sort)
							{
								$(tpl).insertBefore($(value));
								hasInsert = true;
								return false;
							}
						});
						if(!hasInsert)
						{
							$(tpl).insertBefore($('tbody tr:last'));
						}
						sortTr();
					}
				});
			});
		});
		</script>
    </body>

</html><?php }} ?>
