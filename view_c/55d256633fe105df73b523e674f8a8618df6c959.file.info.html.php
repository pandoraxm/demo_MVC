<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.8, created on 2016-08-30 21:57:37
         compiled from "view\stu\info.html" */ ?>
<?php /*%%SmartyHeaderCode:371157c590d1587830-28009946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.8, created on 2016-08-30 10:43:08
         compiled from "view\stu\info.html" */ ?>
<?php /*%%SmartyHeaderCode:2412557c5471c353043-51586808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 51e1a6c72862c7ff86e8fdac2097b23f4a2cb8d1
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d256633fe105df73b523e674f8a8618df6c959' => 
    array (
      0 => 'view\\stu\\info.html',
      1 => 1472462184,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '371157c590d1587830-28009946',
=======
  'nocache_hash' => '2412557c5471c353043-51586808',
>>>>>>> 51e1a6c72862c7ff86e8fdac2097b23f4a2cb8d1
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
<<<<<<< HEAD
  'unifunc' => 'content_57c590d15db661_29259187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c590d15db661_29259187')) {function content_57c590d15db661_29259187($_smarty_tpl) {?><!DOCTYPE html>
=======
  'unifunc' => 'content_57c5471c3cce83_41818603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5471c3cce83_41818603')) {function content_57c5471c3cce83_41818603($_smarty_tpl) {?><!DOCTYPE html>
>>>>>>> 51e1a6c72862c7ff86e8fdac2097b23f4a2cb8d1
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>

	<?php echo $_smarty_tpl->getSubTemplate ("stu/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h3 style="font:30px '微软雅黑'"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</h3>
	<button onclick="window.history.back();">返回</button>

</body>
</html><?php }} ?>