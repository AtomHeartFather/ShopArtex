<?php
/* Smarty version 3.1.33, created on 2019-06-19 02:25:28
  from '/var/www/artex/themes/artex/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0972e822d178_74102985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f263825d2e90bc8420571a496f9186e42e76cf' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0972e822d178_74102985 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
