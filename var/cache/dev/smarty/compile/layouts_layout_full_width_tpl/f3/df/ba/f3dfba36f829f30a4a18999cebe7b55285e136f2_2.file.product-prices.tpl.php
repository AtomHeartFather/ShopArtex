<?php
/* Smarty version 3.1.33, created on 2019-06-22 00:29:04
  from '/var/www/artex/themes/artex/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0d4c2019faa1_09269884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3dfba36f829f30a4a18999cebe7b55285e136f2' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/product-prices.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0d4c2019faa1_09269884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4764747755d0d4c20154009_74542188', 'product_discount');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18415034035d0d4c2015ba14_74231166', 'product_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6640945995d0d4c20177e36_79655905', 'product_without_taxes');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5405670625d0d4c2017edf2_19847959', 'product_pack_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21016245135d0d4c201845e3_41228134', 'product_ecotax');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19156137005d0d4c20190736_73833561', 'product_unit_price');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>


    <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
      <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
  </div>
<?php }
}
/* {block 'product_discount'} */
class Block_4764747755d0d4c20154009_74542188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_4764747755d0d4c20154009_74542188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <p class="product-discount">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

          <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_price'} */
class Block_18415034035d0d4c2015ba14_74231166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_18415034035d0d4c2015ba14_74231166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
        <link itemprop="availability" href="https://schema.org/InStock"/>
        <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
         <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</small>
        <?php }?>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
            <span class="discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage'])),$_smarty_tpl ) );?>
</span>
          <?php } else { ?>
            <span class="discount-amount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_amount'])),$_smarty_tpl ) );?>
</span>
          <?php }?>
        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_6640945995d0d4c20177e36_79655905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_6640945995d0d4c20177e36_79655905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_5405670625d0d4c2017edf2_19847959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_5405670625d0d4c2017edf2_19847959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_21016245135d0d4c201845e3_41228134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_21016245135d0d4c201845e3_41228134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
/* {block 'product_unit_price'} */
class Block_19156137005d0d4c20190736_73833561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_unit_price' => 
  array (
    0 => 'Block_19156137005d0d4c20190736_73833561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
        <p class="product-unit-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_unit_price'} */
}
