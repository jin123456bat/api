<?php /* Smarty version Smarty-3.1.16, created on 2016-08-08 17:09:34
         compiled from "/var/www/api/application/template/front/file.html" */ ?>
<?php /*%%SmartyHeaderCode:99357265456efcc3b1b8af1-49467750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1ac8797ea8402f2074caca1ecc4fc3c89b4f44' => 
    array (
      0 => '/var/www/api/application/template/front/file.html',
      1 => 1470647357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99357265456efcc3b1b8af1-49467750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56efcc3b21ba79_50132133',
  'variables' => 
  array (
    'VIEW_ROOT' => 0,
    'file' => 0,
    'x_csrf_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56efcc3b21ba79_50132133')) {function content_56efcc3b21ba79_50132133($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/api/extends/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>共享文件</title>
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
                                <span>共享文件</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> 共享文件
                        <small>共享文件</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-settings font-dark"></i>
								<span class="caption-subject font-dark sbold uppercase">文件列表</span>
							</div>
							<div class="actions">
								<div class="btn-group btn-group-devided" data-toggle="buttons">
									<input id="upload" type="button" class="btn btn-transparent dark btn-outline btn-circle btn-sm active" name="upload" value="上传文件">
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-hover" id="file">
							<thead>
								<tr>
									<th>文件名</th><th>上传人</th><th>大小</th><th>上传时间</th><th>备注</th><th>操作</th>
								</tr>
							</thead>
							<tbody>
							
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['file'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['file']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['name'] = 'file';
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['file']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total']);
?>
							<tr data-id="<?php echo $_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['id'];?>
">
								<td><?php echo $_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['user'];?>
</td>
								<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatSize'][0][0]->formatSize(array('size'=>$_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['size']),$_smarty_tpl);?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['uploadtime'],'Y-m-d H:i:s');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['note'];?>
</td>
								<td><button class="btn yellow btn-outline btn-circle btn-xs download">下载</button><button class="btn red btn-outline btn-circle btn-xs remove">删除</button></td>
							</tr>
							<?php endfor; endif; ?>
							</tbody>
							</table>
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
		
		function getNowFormatDate() {
			var date = new Date();
			var seperator1 = "-";
			var seperator2 = ":";
			var month = date.getMonth() + 1;
			var strDate = date.getDate();
			if (month >= 1 && month <= 9) {
				month = "0" + month;
			}
			if (strDate >= 0 && strDate <= 9) {
				strDate = "0" + strDate;
			}
			var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
					+ " " + date.getHours() + seperator2 + date.getMinutes()
					+ seperator2 + date.getSeconds();
			return currentdate;
		}
		
		function formatSize(size)
		{
			var temp = ['字节','KB','MB','GB','TB'];
			var index = 0;
			size = parseInt(size);
			while(size > 1024)
			{
				index++;
				size = size/1024;
			}
			return parseFloat(size).toFixed(2) + temp[index];
		}
		
		$('#file').on('click','.remove',function(){
			var id = $(this).parents('tr').data('id');
			var ths = $(this);
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('m'=>'ajax','c'=>'file','a'=>'remove'),$_smarty_tpl);?>
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
						type: 'success', // alert's type 
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
		
		$('#file').on('click','.download',function(){
			var url = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('c'=>'file','a'=>'download'),$_smarty_tpl);?>
&id='+$(this).parents('tr').data('id');
			window.open(url,'new');
		});
		
		var ajax = [];
		
		$('#file').on('click','.quit',function(){
			var process = $(this).parents('tr').data('process');
			ajax[process].abort();
			var name = $(this).parents('tr').find('.name').html();
			$(this).parents('tr').remove();
			$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('c'=>'file','a'=>'clear'),$_smarty_tpl);?>
',{name:name},function(){
			});
			return false;
		});

		$('#upload').on('click',function(){
			var input = $('<input type="file">');
			input.trigger('click');
			input.on('change',function(){
				var file = $(this)[0].files[0],  //文件对象
                name = file.name,        //文件名
                size = file.size;        //总大小
            	var succeed = [];
				
				var shardSize = 1 * 1024 * 1024,    //以1MB为一个分片
                sharedCount = Math.ceil(size / shardSize);  //总片数
				
				var key = Math.ceil(Math.random() * 1000000000);
				succeed[key] = 0;
				
				
				for(var i = 0;i < sharedCount;++i){
					//计算每一片的起始与结束位
					var start = i * shardSize,
						end = Math.min(size, start + shardSize);
					//构造一个表单，FormData是HTML5新增的
					var form = new FormData();
					form.append("data", file.slice(start,end));  //slice方法用于切出文件的一部分
					form.append("name", name);
					form.append('key',key);
					form.append("total", sharedCount);  //总片数
					form.append("index", i + 1);        //当前是第几片
					form.append('pid','<?php echo $_GET['id'];?>
');
					//Ajax提交
					ajax[key] = $.ajax({
						timeout:0,
						url: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url(array('c'=>'file','a'=>'upload'),$_smarty_tpl);?>
",
						type: "POST",
						data: form,
						async: true,        //异步
						processData: false,  //很重要，告诉jquery不要对form进行处理
						contentType: false,  //很重要，指定为false才能形成正确的Content-Type
						error:function(e){
							App.alert({
								container: $('#alert_container').val(), // alerts parent container 
								place: 'append', // append or prepent in container 
								type: 'success', // alert's type 
								message: '错误了？',
								close: true,
								focus: true, // auto scroll to the alert after shown
								closeInSeconds: 3, // auto close after defined seconds 
								icon:'fa fa-check' // put icon class before the message
							});
						},
						success: function(response){
							try
							{
								//这里应该是上传进度
								succeed[key]++;
								
								if(response.code==101)
								{
									var tpl = '<tr data-process="'+response.body.id+'" id="file_'+response.body.id+'"><td class="name">'+name+'</td><td>'+response.uid+'</td><td class="size"><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only"> 0% </span></div></div></td><td>'+getNowFormatDate()+'</td><td></td><td class="dosomething"><button class="btn btn-transparent green btn-outline btn-circle btn-xs quit">取消</button></td></tr>';
									$('#file tbody').prepend(tpl);
								}
								else if(response.code==102)
								{
									var percent = Math.ceil(succeed[response.body]/sharedCount * 100);
									$('#file_'+response.body).find('.progress-bar').width(percent+'%');
								}
								else if(response.code==1)
								{
									if($('#file_'+response.body.key).length == 0)
									{
										var tpl = '<tr data-id="'+response.body.id+'" id="file_'+response.body.id+'"><td>'+name+'</td><td>'+response.uid+'</td><td class="size">'+formatSize(response.body.size)+'</td><td>'+getNowFormatDate()+'</td><td></td><td><button class="btn btn-transparent yellow btn-outline btn-circle btn-xs download">下载</button><button class="btn btn-transparent red btn-outline btn-circle btn-xs remove">删除</button></td></tr>';
										$('#file tbody').prepend(tpl);
									}
									else
									{
										$('#file_'+response.body.key).attr('data-id',response.body.id);
										$('#file_'+response.body.key).find('.size').html(formatSize(response.body.size));
										$('#file_'+response.body.key).find('.dosomething').empty();
										$('#file_'+response.body.key).find('.dosomething').append('<button class="btn btn-transparent yellow btn-outline btn-circle btn-xs download">下载</button><button class="btn btn-transparent red btn-outline btn-circle btn-xs remove">删除</button>');
									}
								}
							}
							catch(e)
							{
								App.alert({
									container: $('#alert_container').val(), // alerts parent container 
									place: 'append', // append or prepent in container 
									type: 'success', // alert's type 
									message: '上传失败',
									close: true,
									focus: true, // auto scroll to the alert after shown
									closeInSeconds: 3, // auto close after defined seconds 
									icon:'fa fa-check' // put icon class before the message
								});
							}
						}
					});
				}
			});
		});
		</script>
    </body>

</html><?php }} ?>
