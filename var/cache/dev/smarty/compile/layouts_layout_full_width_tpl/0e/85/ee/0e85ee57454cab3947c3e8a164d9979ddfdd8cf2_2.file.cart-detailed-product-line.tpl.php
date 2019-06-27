<?php
/* Smarty version 3.1.33, created on 2019-06-28 01:10:18
  from '/var/www/artex/themes/artex/templates/checkout/_partials/cart-detailed-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d153eca710e22_75177931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e85ee57454cab3947c3e8a164d9979ddfdd8cf2' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/checkout/_partials/cart-detailed-product-line.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d153eca710e22_75177931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8841581025d153eca6ac1c2_28306733', 'cart_detailed_product_line');
?>

<?php }
/* {block 'cart_detailed_product_line_customization'} */
class Block_7684689245d153eca6c7647_31539549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <span class="product-line-info">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
            <span class="value">
              <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                  <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                <?php } else { ?>
                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
              <?php }?>
            </span>
          </span>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
  <?php
}
}
/* {/block 'cart_detailed_product_line_customization'} */
/* {block 'hook_cart_extra_product_actions'} */
class Block_8126825145d153eca703f91_22660383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_cart_extra_product_actions'} */
/* {block 'cart_detailed_product_line'} */
class Block_8841581025d153eca6ac1c2_28306733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_8841581025d153eca6ac1c2_28306733',
  ),
  'cart_detailed_product_line_customization' => 
  array (
    0 => 'Block_7684689245d153eca6c7647_31539549',
  ),
  'hook_cart_extra_product_actions' => 
  array (
    0 => 'Block_8126825145d153eca703f91_22660383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <span class="product-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"></span>
  <span class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
    <span class="product-attributes">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    </span>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7684689245d153eca6c7647_31539549', 'cart_detailed_product_line_customization', $this->tplIndex);
?>


  <span class="product-availability"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
    <small class="sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</small>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['down_quantity_url']) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
" class="js-decrease-product-quantity" data-link-action="update-quantity">-</a>
  <?php }?>
  <span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['up_quantity_url']) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
" class="js-increase-product-quantity" data-link-action="update-quantity">+</a>
  <?php }?>
  <a
    class="remove-from-cart"
    data-link-action="remove-from-cart"
    data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
    data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
    rel="nofollow"
   >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8126825145d153eca703f91_22660383', 'hook_cart_extra_product_actions', $this->tplIndex);
?>


  <span class="product-price">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
      <span class="gift"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
    <?php } else { ?>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

    <?php }?>
  </span>
<?php
}
}
/* {/block 'cart_detailed_product_line'} */
}
