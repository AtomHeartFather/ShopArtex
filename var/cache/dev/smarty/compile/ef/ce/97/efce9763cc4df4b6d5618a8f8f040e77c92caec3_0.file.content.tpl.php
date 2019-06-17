<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:33:39
  from '/var/www/artex/admin896np0lun/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d080733b55061_08015138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efce9763cc4df4b6d5618a8f8f040e77c92caec3' => 
    array (
      0 => '/var/www/artex/admin896np0lun/themes/default/template/content.tpl',
      1 => 1558979528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d080733b55061_08015138 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
