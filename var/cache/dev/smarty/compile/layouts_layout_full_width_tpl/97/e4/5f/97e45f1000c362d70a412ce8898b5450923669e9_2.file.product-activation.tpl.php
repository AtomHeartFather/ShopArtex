<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:35:12
  from '/var/www/artex/themes/artex/templates/catalog/_partials/product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d080790920157_81805000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e45f1000c362d70a412ce8898b5450923669e9' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/product-activation.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d080790920157_81805000 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div role="alert">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
      <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
}
}
