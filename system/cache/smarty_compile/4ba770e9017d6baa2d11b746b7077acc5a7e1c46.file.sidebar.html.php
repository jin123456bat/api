<?php /* Smarty version Smarty-3.1.16, created on 2016-03-22 17:07:36
         compiled from "/var/www/api/application/template/front/public/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:45396968156d944e7773987-43792878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ba770e9017d6baa2d11b746b7077acc5a7e1c46' => 
    array (
      0 => '/var/www/api/application/template/front/public/sidebar.html',
      1 => 1458637325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45396968156d944e7773987-43792878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d944e7826809_86265722',
  'variables' => 
  array (
    'project' => 0,
    'group' => 0,
    'selectedGroup' => 0,
    'api' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d944e7826809_86265722')) {function content_56d944e7826809_86265722($_smarty_tpl) {?><div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->
	<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
		<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
		<li class="sidebar-toggler-wrapper hide">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler"> </div>
			<!-- END SIDEBAR TOGGLER BUTTON -->
		</li>
		<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
		<li class="sidebar-search-wrapper">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
			<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
			<form class="sidebar-search  ">
				<a href="javascript:;" class="remove">
					<i class="icon-close"></i>
				</a>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<a href="" class="btn submit">
							<i class="icon-magnifier"></i>
						</a>
					</span>
				</div>
			</form>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
		</li>
		
		<li class="nav-item start <?php if ($_GET['a']=='create_project') {?>active<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'create_project'),$_smarty_tpl);?>
" class="nav-link">
				<i class="icon-plus"></i>
				<span class="title">发起项目</span>
			</a>
		</li>
		<li class="nav-item start <?php if ($_GET['a']=='project_list') {?>active<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project_list'),$_smarty_tpl);?>
" class="nav-link">
				<i class="icon-list"></i>
				<span class="title">项目列表</span>
			</a>
		</li>
		<li class="nav-item start ">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'dustbin'),$_smarty_tpl);?>
" class="nav-link nav-toggle">
				<i class="icon-briefcase"></i>
				<span class="title">垃圾箱</span>
			</a>
		</li>
		<?php if ($_GET['a']=='project'||$_GET['a']=='create_api'||$_GET['a']=='api'||$_GET['a']=='edit_api'||$_GET['a']=='demo'||$_GET['a']=='file'||$_GET['a']=='module') {?>
		<li class="heading">
			<h3 class="uppercase">接口列表</h3>
		</li>
		<li class="nav-item <?php if ($_GET['a']=='project') {?>active<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['project']->value['id']),$_smarty_tpl);?>
" class="nav-link nav-toggle">
				<i class="icon-book-open"></i>
				<span class="title"><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</span>
			</a>
		</li>
		<li class="nav-item <?php if ($_GET['a']=='create_api'||$_GET['a']=='api'||$_GET['a']=='edit_api'||$_GET['a']=='demo') {?>open<?php }?>">
			<a href="javascript:;" class="nav-link nav-toggle">
				<i class="icon-folder"></i>
				<span class="title">接口文档</span>
				<span class="arrow <?php if ($_GET['a']=='create_api'||$_GET['a']=='api'||$_GET['a']=='edit_api'||$_GET['a']=='demo') {?>open<?php }?>"></span>
			</a>
			<ul class="sub-menu" <?php if ($_GET['a']=='create_api'||$_GET['a']=='api'||$_GET['a']=='edit_api'||$_GET['a']=='demo') {?>style="display:block;"<?php }?>>
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
				<li class="nav-item level-0 dragable <?php if (($_GET['a']=='create_api'&&$_GET['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])||($_GET['a']=='api'&&$_smarty_tpl->tpl_vars['selectedGroup']->value['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])||($_GET['a']=='edit_api'&&$_smarty_tpl->tpl_vars['selectedGroup']->value['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])||($_GET['a']=='demo'&&$_smarty_tpl->tpl_vars['selectedGroup']->value['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])) {?>active open<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'];?>
" draggable="true">
					<a href="javascript:;" class="nav-link nav-toggle">
						<i class="icon-list"></i>
						<span class="title"><?php echo $_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['name'];?>
</span>
						<span class="arrow <?php if (($_GET['a']=='create_api'&&$_GET['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])||($_GET['a']=='api'&&$_smarty_tpl->tpl_vars['selectedGroup']->value['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])||($_GET['a']=='edit_api'&&$_smarty_tpl->tpl_vars['selectedGroup']->value['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])||($_GET['a']=='demo'&&$_smarty_tpl->tpl_vars['selectedGroup']->value['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])) {?>open<?php }?>"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item <?php if (($_GET['a']=='create_api'&&$_GET['id']==$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'])) {?>active open<?php }?>">
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'create_api','id'=>$_smarty_tpl->tpl_vars['group']->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id']),$_smarty_tpl);?>
" class="nav-link ">
								<span class="title">添加文档</span>
							</a>
						</li>
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
						<li class="nav-item <?php if (($_GET['a']=='api'&&$_GET['id']==$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['id'])||($_GET['a']=='edit_api'&&$_GET['id']==$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['id'])||($_GET['a']=='demo'&&$_GET['id']==$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['id'])) {?>active open<?php }?>">
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'api','id'=>$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['id']),$_smarty_tpl);?>
" class="nav-link ">
								<span class="title"><?php echo $_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['name'];?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['accesstime']<=$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['modifytime']&&$_GET['id']!=$_smarty_tpl->tpl_vars['api']->value[$_smarty_tpl->getVariable('smarty')->value['section']['api']['index']]['id']) {?>
								<span class="badge badge-success">新</span>
								<?php }?>
							</a>
						</li>
						<?php }?>
						<?php endfor; endif; ?>
					</ul>
				</li>
			<?php endfor; endif; ?>
			</ul>
		</li>
		<li class="nav-item <?php if ($_GET['a']=='file') {?>open<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'file','id'=>$_smarty_tpl->tpl_vars['project']->value['id']),$_smarty_tpl);?>
" class="nav-link nav-toggle">
				<i class="icon-doc"></i>
				<span class="title">共享文件</span>
			</a>
		</li>
		<li class="nav-item <?php if ($_GET['a']=='module') {?>open<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'module','id'=>$_smarty_tpl->tpl_vars['project']->value['id']),$_smarty_tpl);?>
" class="nav-link nav-toggle">
				<i class="icon-layers"></i>
				<span class="title"> 数据模型 </span>
			</a>
		</li>
		<?php }?>
	</ul>
	<!-- END SIDEBAR MENU -->
	<!-- END SIDEBAR MENU -->
</div><?php }} ?>
