<?php /* Smarty version Smarty-3.1.16, created on 2014-02-19 06:10:36
         compiled from "templates/recent_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3146600285304336bd0b266-24173505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41007120cd29565696ab0b7e522d6684637a8b0d' => 
    array (
      0 => 'templates/recent_images.tpl',
      1 => 1392786635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3146600285304336bd0b266-24173505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5304336bd167f3_38506562',
  'variables' => 
  array (
    'recent_images' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5304336bd167f3_38506562')) {function content_5304336bd167f3_38506562($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<div class="im-all">
				<ul class="media-list">
				  <li class="media">
				    <a class="pull-left" href="<?php echo $_smarty_tpl->tpl_vars['value']->value->img;?>
">
				      <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb;?>
" alt="...">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['value']->value->comment;?>
</h4>
				      <span class="pull-bottom">投稿者 : <?php echo $_smarty_tpl->tpl_vars['value']->value->username;?>
</span>
				    </div>
				  </li>
				</ul>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php }} ?>
