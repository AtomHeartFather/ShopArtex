<?php
/* Smarty version 3.1.33, created on 2019-06-21 23:55:50
  from 'module:psshoppingcartmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0d44560caed7_93624450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de54a7df2ce9f325675562cb8b6164899785ff9' => 
    array (
      0 => 'module:psshoppingcartmodal.tpl',
      1 => 1559758433,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0d44560caed7_93624450 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/artex/modules/ps_shoppingcart/modal.tpl --><div id="blockcart-modal" data-close-on-click="true">
  <div>
    <section>
      <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Successfully Added to Your Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </section>
  </div>
</div>
<!-- end /var/www/artex/modules/ps_shoppingcart/modal.tpl --><?php }
}
