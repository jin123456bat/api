<?php /* Smarty version Smarty-3.1.16, created on 2016-03-03 17:23:30
         compiled from "D:\wamp\www\api\application\template\front\project_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1741156d65cf64b7953-74880007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01fdd7029feabf4cd8787d57daea8800a12114f' => 
    array (
      0 => 'D:\\wamp\\www\\api\\application\\template\\front\\project_list.html',
      1 => 1456997008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1741156d65cf64b7953-74880007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d65cf6597a13_53288693',
  'variables' => 
  array (
    'VIEW_ROOT' => 0,
    'myProject' => 0,
    'joinProject' => 0,
    'completeProject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d65cf6597a13_53288693')) {function content_56d65cf6597a13_53288693($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\api\\extends\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>项目列表</title>
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
                                <span>项目列表</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 项目列表
                        <small>所有项目</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN : LISTS -->
                    
                    
                    <div class="row">
                        
                        
                        <div class="col-lg-4">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">我的项目</span>
                                        <div class="caption-desc font-grey-cascade"> 我发起的项目 </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-list">
                                        <div class="mt-list-head list-news ext-1 font-white bg-grey-gallery">
                                            <div class="list-head-title-container">
                                                <h3 class="list-title">项目列表</h3>
                                            </div>
                                            <div class="list-count pull-right bg-red"><?php echo count($_smarty_tpl->tpl_vars['myProject']->value);?>
</div>
                                        </div>
                                        <div class="mt-list-container list-news ext-1">
                                            <ul>
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['name'] = 'myProject';
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['myProject']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['myProject']['total']);
?>
                                                <li class="mt-list-item">
                                                    <div class="list-icon-container">
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['id']),$_smarty_tpl);?>
">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="list-thumb">
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['id']),$_smarty_tpl);?>
">
                                                            <img alt="" onerror="this.src='http://<?php echo $_SERVER['HTTP_HOST'];?>
/api/application/template/assets/global/img/portfolio/600x600/01.jpg';" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource'][0][0]->resource(array('file'=>$_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['logo']),$_smarty_tpl);?>
" />
                                                        </a>
                                                    </div>
                                                    <div class="list-datetime bold uppercase font-red"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['createtime'],"Y-m-d H:i:s");?>
 </div>
                                                    <div class="list-item-content">
                                                        <h3 class="uppercase">
                                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['name'];?>
</a>
                                                        </h3>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['myProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['myProject']['index']]['description'];?>
</p>
                                                    </div>
                                                </li>
                                               <?php endfor; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-lg-4">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">参与项目</span>
                                        <div class="caption-desc font-grey-cascade"> 我参加的项目 </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-list">
                                        <div class="mt-list-head list-news ext-1 font-white bg-grey-gallery">
                                            <div class="list-head-title-container">
                                                <h3 class="list-title">项目列表</h3>
                                            </div>
                                            <div class="list-count pull-right bg-red"><?php echo count($_smarty_tpl->tpl_vars['joinProject']->value);?>
</div>
                                        </div>
                                        <div class="mt-list-container list-news ext-1">
                                            <ul>
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['name'] = 'joinProject';
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['joinProject']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['joinProject']['total']);
?>
                                                <li class="mt-list-item">
                                                    <div class="list-icon-container">
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['id']),$_smarty_tpl);?>
">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="list-thumb">
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['id']),$_smarty_tpl);?>
">
                                                            <img alt="" onerror="this.src='http://<?php echo $_SERVER['HTTP_HOST'];?>
/api/application/template/assets/global/img/portfolio/600x600/01.jpg';" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource'][0][0]->resource(array('file'=>$_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['logo']),$_smarty_tpl);?>
" />
                                                        </a>
                                                    </div>
                                                    <div class="list-datetime bold uppercase font-red"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['createtime'],"Y-m-d H:i:s");?>
 </div>
                                                    <div class="list-item-content">
                                                        <h3 class="uppercase">
                                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['name'];?>
</a>
                                                        </h3>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['joinProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['joinProject']['index']]['description'];?>
</p>
                                                    </div>
                                                </li>
                                               <?php endfor; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-lg-4">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">完成项目</span>
                                        <div class="caption-desc font-grey-cascade"> 已经完成了的项目 </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-list">
                                        <div class="mt-list-head list-news ext-1 font-white bg-grey-gallery">
                                            <div class="list-head-title-container">
                                                <h3 class="list-title">项目列表</h3>
                                            </div>
                                            <div class="list-count pull-right bg-red">0</div>
                                        </div>
                                        <div class="mt-list-container list-news ext-1">
                                            <ul>
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['name'] = 'completeProject';
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['completeProject']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['completeProject']['total']);
?>
                                                <li class="mt-list-item">
                                                    <div class="list-icon-container">
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['id']),$_smarty_tpl);?>
">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="list-thumb">
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['id']),$_smarty_tpl);?>
">
                                                            <img alt="" onerror="this.src='http://<?php echo $_SERVER['HTTP_HOST'];?>
/api/application/template/assets/global/img/portfolio/600x600/01.jpg';" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource'][0][0]->resource(array('file'=>$_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['logo']),$_smarty_tpl);?>
" />
                                                        </a>
                                                    </div>
                                                    <div class="list-datetime bold uppercase font-red"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['createtime'],"Y-m-d H:i:s");?>
 </div>
                                                    <div class="list-item-content">
                                                        <h3 class="uppercase">
                                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'project','id'=>$_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['name'];?>
</a>
                                                        </h3>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['completeProject']->value[$_smarty_tpl->getVariable('smarty')->value['section']['completeProject']['index']]['description'];?>
</p>
                                                    </div>
                                                </li>
                                               <?php endfor; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						
						
                    </div>
                    
                    <!-- END : LISTS -->
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
    </body>

</html><?php }} ?>
