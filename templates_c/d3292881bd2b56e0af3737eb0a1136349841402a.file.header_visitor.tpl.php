<?php /* Smarty version Smarty-3.1.16, created on 2014-02-17 14:39:41
         compiled from "templates/header_visitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86287651053020cd39d15e7-95991227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3292881bd2b56e0af3737eb0a1136349841402a' => 
    array (
      0 => 'templates/header_visitor.tpl',
      1 => 1392643681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86287651053020cd39d15e7-95991227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53020cd39d6470_64432876',
  'variables' => 
  array (
    'token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53020cd39d6470_64432876')) {function content_53020cd39d6470_64432876($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">image_board 掲示板</a>
		</div>
		<div class="navbar-collapse collapse">
		<form action="login.php" method="post" class="navbar-form navbar-right" role="form">
				<div class="form-group">
					<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
				</div>
				<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
				<input type="submit" class="btn btn-default" value="Log in">
				<a href="register.php" class="btn btn-primary" role="button">会員登録</a>
			</form>
		</div><!--/.navbar-collapse -->
	</div>
</div><?php }} ?>
