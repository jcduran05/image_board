<?php /* Smarty version Smarty-3.1.16, created on 2014-02-18 03:02:01
         compiled from "templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29013445253019bdca87de0-97124384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a0270564c79ee7a1c4f40d2a5e8bcfac7e3570' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1392688914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29013445253019bdca87de0-97124384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53019bdcabc7d5_18068318',
  'variables' => 
  array (
    'token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53019bdcabc7d5_18068318')) {function content_53019bdcabc7d5_18068318($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | 登録</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header_visitor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="container" style="margin: 100px 0;">
		<div class="row">
			<div class="col-md-5 col-md-offset-4">
			<form action="login.php" method="post" class="form">
					<div class="form-group col-md-12">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="remember"> Remember me
							<input type="checkbox" name="remember" id="remember">
						</label>
					</div>
					<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
					<input type="submit" class="btn btn-default submit" value="Log in">
				</form>
			</div>
		</div>
	</div>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</body>
</html>
<?php }} ?>
