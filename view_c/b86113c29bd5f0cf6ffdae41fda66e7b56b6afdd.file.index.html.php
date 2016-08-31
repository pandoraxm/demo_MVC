<?php /* Smarty version Smarty-3.1.8, created on 2016-08-30 22:13:14
         compiled from "view\stu\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1992957c590c6e0e818-59806890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b86113c29bd5f0cf6ffdae41fda66e7b56b6afdd' => 
    array (
      0 => 'view\\stu\\index.html',
      1 => 1472566388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992957c590c6e0e818-59806890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57c590c6e8ef31_47353358',
  'variables' => 
  array (
    'vo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c590c6e8ef31_47353358')) {function content_57c590c6e8ef31_47353358($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("stu/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<ul>
		<li><a href="index.php">返回</a></li>
	</ul>
	<!-- menu.html引用 通过stu.php实现的引入 -->
	<table width="600px" border='1px'>
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
			<tr>
				
				<td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['classid'];?>
</td>
				<td>
					<a href="index.php?m=stu&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">删除</a> | 
					<a href="index.php?m=stu&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">修改</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html><?php }} ?>