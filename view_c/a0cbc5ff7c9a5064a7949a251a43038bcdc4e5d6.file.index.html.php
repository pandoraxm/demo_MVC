<?php /* Smarty version Smarty-3.1.8, created on 2016-08-30 10:23:06
         compiled from "view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:432857c541a765cfe1-86177717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0cbc5ff7c9a5064a7949a251a43038bcdc4e5d6' => 
    array (
      0 => 'view\\index.html',
      1 => 1472545383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '432857c541a765cfe1-86177717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57c541a7699f04_79853924',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c541a7699f04_79853924')) {function content_57c541a7699f04_79853924($_smarty_tpl) {?><!DOCTYPE html>
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