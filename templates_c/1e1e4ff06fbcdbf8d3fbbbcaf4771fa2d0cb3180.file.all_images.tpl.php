<?php /* Smarty version Smarty-3.1.16, created on 2014-02-19 05:30:10
         compiled from "templates/all_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3036974725301debe4e01e9-76503176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1e4ff06fbcdbf8d3fbbbcaf4771fa2d0cb3180' => 
    array (
      0 => 'templates/all_images.tpl',
      1 => 1392784208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3036974725301debe4e01e9-76503176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5301debe4f0236_26350695',
  'variables' => 
  array (
    'recent_images' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301debe4f0236_26350695')) {function content_5301debe4f0236_26350695($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['itemid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recent_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['itemid']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<div class="im-all">
				<ul class="media-list">
				  <li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb;?>
" alt="...">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Media heading</h4>
				      ...
				    </div>
				  </li>
				</ul>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php }} ?>
