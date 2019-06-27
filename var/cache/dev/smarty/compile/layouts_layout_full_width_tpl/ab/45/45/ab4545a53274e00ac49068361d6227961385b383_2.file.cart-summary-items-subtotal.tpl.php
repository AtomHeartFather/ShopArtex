<?php
/* Smarty version 3.1.33, created on 2019-06-28 01:10:18
  from '/var/www/artex/themes/artex/templates/checkout/_partials/cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d153eca71f939_74345639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab4545a53274e00ac49068361d6227961385b383' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d153eca71f939_74345639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10426880155d153eca719887_75906576', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_10426880155d153eca719887_75906576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_10426880155d153eca719887_75906576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="items-subtotal">
    <span class="js-subtotal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
