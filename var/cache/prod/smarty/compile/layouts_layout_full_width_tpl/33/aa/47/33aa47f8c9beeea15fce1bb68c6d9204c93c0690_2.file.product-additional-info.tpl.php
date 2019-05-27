<?php
/* Smarty version 3.1.33, created on 2019-05-26 16:17:12
  from '/home/a/artex73/artex/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cea91d859af92_71222845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33aa47f8c9beeea15fce1bb68c6d9204c93c0690' => 
    array (
      0 => '/home/a/artex73/artex/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1556443793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cea91d859af92_71222845 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
