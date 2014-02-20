<?php /* Smarty version Smarty-3.1.16, created on 2014-02-18 03:01:55
         compiled from "templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1080600172530193e447e362-53661551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96364cdd37ce55759f6c95bec6d884ed43585f1d' => 
    array (
      0 => 'templates/register.tpl',
      1 => 1392688891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080600172530193e447e362-53661551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530193e44ae8f9_76320402',
  'variables' => 
  array (
    'token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530193e44ae8f9_76320402')) {function content_530193e44ae8f9_76320402($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | 登録</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
<?php echo $_smarty_tpl->getSubTemplate ("header_visitor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="container" style="margin: 60px 0;">
			<div class="row">
				<div class="col-md-5 col-md-offset-4">
					<form action="register.php" class="form" method="post">
						<div class="form-group col-md-12">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" value="" autocomplete="off">
						</div>
						<div class="form-group col-md-12">
							<label for="password">Choose a password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="form-group col-md-12">
							<label for="password_again">Enter your password again</label>
							<input type="password" class="form-control" name="password_again" id="password_again">
						</div>
						<div class="form-group col-md-12">
							<label for="name">Enter your name</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
						<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
						<input type="submit" class="btn btn-default submit" value="Register">
					</form>
				</div>
			</div>
		</div>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	</body>
	</html>

<?php }} ?>
