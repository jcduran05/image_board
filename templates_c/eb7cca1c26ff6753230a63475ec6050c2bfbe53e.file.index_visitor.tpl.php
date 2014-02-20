<?php /* Smarty version Smarty-3.1.16, created on 2014-02-19 06:14:33
         compiled from "templates/index_visitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8733582035301a3df9cbe69-91130402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb7cca1c26ff6753230a63475ec6050c2bfbe53e' => 
    array (
      0 => 'templates/index_visitor.tpl',
      1 => 1392786870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8733582035301a3df9cbe69-91130402',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5301a3dfa06bc8_23807210',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301a3dfa06bc8_23807210')) {function content_5301a3dfa06bc8_23807210($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | HOME</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"></head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header_visitor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="jumbotron">
      <div class="container">
        <h1>Hello!</h1>
        <p>掲示板を使うために登録してください。</p>
      </div>
	</div>
	<div class="container">
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-danger">Please login or register to be able to upload and view all parts of the website.</div>
			</div>
		</div>
	</div>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</body>
</html><?php }} ?>
