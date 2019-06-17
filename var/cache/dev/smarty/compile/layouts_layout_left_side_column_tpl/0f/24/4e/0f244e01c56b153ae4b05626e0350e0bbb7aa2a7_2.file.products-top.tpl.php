<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:40:54
  from '/var/www/artex/themes/artex/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0808e65d1d06_15264250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f244e01c56b153ae4b05626e0350e0bbb7aa2a7' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/products-top.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5d0808e65d1d06_15264250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="products-selection">
  <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
  <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12720556685d0808e65c4442_92653321', 'sort_by');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15191997585d0808e65c8e15_00226299', 'pagination_summary');
?>

</div>
<?php }
/* {block 'sort_by'} */
class Block_12720556685d0808e65c4442_92653321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_12720556685d0808e65c4442_92653321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
  <?php
}
}
/* {/block 'sort_by'} */
/* {block 'pagination_summary'} */
class Block_15191997585d0808e65c8e15_00226299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_15191997585d0808e65c8e15_00226299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'pagination_summary'} */
}
