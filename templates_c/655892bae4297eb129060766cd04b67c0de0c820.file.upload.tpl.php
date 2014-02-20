<?php /* Smarty version Smarty-3.1.16, created on 2014-02-18 06:18:18
         compiled from "templates/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14694799425301e5c48c2251-30689533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655892bae4297eb129060766cd04b67c0de0c820' => 
    array (
      0 => 'templates/upload.tpl',
      1 => 1392700664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14694799425301e5c48c2251-30689533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5301e5c4917be4_38438711',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301e5c4917be4_38438711')) {function content_5301e5c4917be4_38438711($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | Upload</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="container">
	<div class="row">
    <div class="col-md-12 upload">
		<!-- image input -->
		<form method="post" action="" class="form" role="form" enctype="multipart/form-data">
			<div class="form-group col-md-12">
				<label for="comment">Comment</label>
				<textarea id="comment" class="form-control" name="comment" rows="5"></textarea>
			</div>
			<div class="form-group col-md-12">
				<label for="image"></label>
				<input type="file" id="image" name="image" />
			</div>
			<input type="submit" class="btn btn-default" name="send" value="書き込む" />
		</form>
		<!-- image input -->
	</div>
	</div>
	</div>

	<script src="js/bootstrap.js"></script>
  	<script src="js/jquery-1.11.0.min.js"></script>
</body>
</html><?php }} ?>
