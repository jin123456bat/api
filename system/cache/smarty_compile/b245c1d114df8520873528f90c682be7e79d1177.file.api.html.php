<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 14:33:49
         compiled from "D:\wamp\www\api\application\template\front\api.html" */ ?>
<?php /*%%SmartyHeaderCode:31856d6aa619161d3-97428824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b245c1d114df8520873528f90c682be7e79d1177' => 
    array (
      0 => 'D:\\wamp\\www\\api\\application\\template\\front\\api.html',
      1 => 1457073228,
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
    'parameter' => 0,
    'x_csrf_token' => 0,
    'project' => 0,
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
								<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'demo','id'=>$_GET['id']),$_smarty_tpl);?>
">
									<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('a'=>'edit_api','id'=>$_GET['id']),$_smarty_tpl);?>
">
									<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
								<a class="btn btn-circle btn-icon-only btn-default" id="remove">
									<i class="icon-trash"></i>
								</a>
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
									<?php endfor; endif; ?>
								</tbody>
							</table>
							<div class="alert alert-info"> <strong>响应示例:</strong> </div>
							<pre id="json"><?php echo $_smarty_tpl->tpl_vars['c_api']->value['response'];?>
</pre>
							<div class="note note-danger">
								<h4 class="block">备注</h4>
								<p> <?php echo $_smarty_tpl->tpl_vars['c_api']->value['note'];?>
 </p>
							</div>
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
