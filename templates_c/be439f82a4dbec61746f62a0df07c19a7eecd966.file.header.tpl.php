<?php /* Smarty version Smarty-3.1.16, created on 2014-02-18 05:54:47
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2081354575301a1512d2db4-82695046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1392699285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081354575301a1512d2db4-82695046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5301a1512d6721_08523940',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301a1512d6721_08523940')) {function content_5301a1512d6721_08523940($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top" role="navigation">
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

		<!-- left side of menu -->  
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
            	<li><a href="upload.php">Upload</a></li>
            	<li class="dropdown">
             		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
	                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
	                    <li><a href="#">Another action</a></li>
	                    <li><a href="#">Something else here</a></li>
	                    <li class="divider"></li>
	                    <li class="dropdown-header">Nav header</li>
	                    <li><a href="#">Separated link</a></li>
	                    <li><a href="#">One more separated link</a></li>
	                </ul>
                </li>
            </ul>

            <!-- right side of menu -->  
		    <ul class="nav navbar-nav navbar-right">
             	<li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
             	<li><a href="logout.php">ログアウト</a></li>
            	</ul>
		</div><!--/.navbar-collapse -->
	</div>
</div><?php }} ?>
