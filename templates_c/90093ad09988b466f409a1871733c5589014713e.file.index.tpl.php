<?php /* Smarty version Smarty-3.1.16, created on 2014-02-19 06:15:12
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6278968705301a205701788-89769713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1392786832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6278968705301a205701788-89769713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5301a205730170_82141681',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301a205730170_82141681')) {function content_5301a205730170_82141681($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | Home</title>
	<link rel="stylesheet" href="css/bootstrap.css"></head>
  <link rel="stylesheet" href="css/style.css"></head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div class="jumbotron">
      <div class="container">
        <h1>Hello!</h1>
        <p>画像を追加するためにアップロードのリンクをクリックしてください。</p>
      </div>
    </div>
    <div class="container">
      <?php echo $_smarty_tpl->getSubTemplate ("recent_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
	<script src="js/bootstrap.js"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
</body>
</html><?php }} ?>
