<?php
/* Smarty version 3.1.33, created on 2019-05-21 17:37:34
  from '/home/a/artex73/artex/public_html/admin896np0lun/themes/default/template/controllers/tracking/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce40d2eb68ce7_07293427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd71ff240f18db011087ed9498a2ae134126a2d24' => 
    array (
      0 => '/home/a/artex73/artex/public_html/admin896np0lun/themes/default/template/controllers/tracking/helpers/list/list_header.tpl',
      1 => 1556443774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce40d2eb68ce7_07293427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16298620655ce40d2eb66f41_25787208', "preTable");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_16298620655ce40d2eb66f41_25787208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_16298620655ce40d2eb66f41_25787208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['list_id']->value == 'empty_categories') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block "preTable"} */
}
