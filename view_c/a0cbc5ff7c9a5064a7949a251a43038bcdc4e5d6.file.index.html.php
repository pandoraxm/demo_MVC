<?php /* Smarty version Smarty-3.1.8, created on 2016-08-30 21:57:23
         compiled from "view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:412857c590c3ccc9f0-80998629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0cbc5ff7c9a5064a7949a251a43038bcdc4e5d6' => 
    array (
      0 => 'view\\index.html',
      1 => 1472565320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '412857c590c3ccc9f0-80998629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57c590c3d26460_89478013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c590c3d26460_89478013')) {function content_57c590c3d26460_89478013($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	<ul>
		<li><a href="index.php?m=stu">学生信息管理</a></li>
	</ul>
</body>
</html><?php }} ?>