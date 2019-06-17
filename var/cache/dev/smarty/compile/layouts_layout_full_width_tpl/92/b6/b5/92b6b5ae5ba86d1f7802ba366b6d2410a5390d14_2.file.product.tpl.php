<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:49:49
  from '/var/www/artex/themes/artex/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d080afe000144_50384088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b6b5ae5ba86d1f7802ba366b6d2410a5390d14' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/product.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d080afe000144_50384088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_726529065d080afde655f7_58292488', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3081705755d080afde69a18_04915167', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13397358125d080afde82db6_95616462', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_726529065d080afde655f7_58292488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_726529065d080afde655f7_58292488',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_3081705755d080afde69a18_04915167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3081705755d080afde69a18_04915167',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
    <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_481664725d080afde85745_33597536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'page_title'} */
class Block_5831969655d080afde8a8b2_08790137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1648674035d080afde898f2_32864993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1 itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5831969655d080afde8a8b2_08790137', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_10108283535d080afde885d1_70175632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1648674035d080afde898f2_32864993', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_flags'} */
class Block_1811301315d080afde93d07_04205287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="product-flags">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_4434403285d080afde9d316_51443505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'product_reference'} */
class Block_20024186125d080afdea00b3_54877912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                <p id="product-reference">
                  <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                  <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
                </p>
              <?php }?>
            <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_condition'} */
class Block_12171580785d080afdea7fc5_37788799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
                <p id="product-condition">
                  <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                  <link itemprop="itemCondition" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
                  <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                </p>
              <?php }?>
            <?php
}
}
/* {/block 'product_condition'} */
/* {block 'product_description_short'} */
class Block_2623971555d080afdeb0e06_67772859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_description'} */
class Block_18027238325d080afdeb53a6_63003337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
            <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_quantities'} */
class Block_11481465635d080afdeb9049_90136425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
                <p id="product-quantities"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
            <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability'} */
class Block_9762320965d080afdebfbf6_72077860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability']) {?>
                <p id="product-availability"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
            <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_availability_date'} */
class Block_10208299985d080afdec5155_58423434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
                <p id="product-availability-date">
                  <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
                  <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
                </p>
              <?php }?>
            <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
class Block_9387425715d080afdecc4e2_67063375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="product-out-of-stock">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_prices'} */
class Block_15686836885d080afded7bf9_11865254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_variants'} */
class Block_6132704065d080afdeda563_38421958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_1430380045d080afdedd056_82046786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'hook_product_buttons'} */
class Block_12148194585d080afdee03e2_45076089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'hook_product_buttons'} */
/* {block 'product_additional_info'} */
class Block_8280541985d080afdee3c74_47977974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_19804101315d080afdee68d4_49991176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_17954219125d080afded1bd3_40104104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15686836885d080afded7bf9_11865254', 'product_prices', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6132704065d080afdeda563_38421958', 'product_variants', $this->tplIndex);
?>



                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1430380045d080afdedd056_82046786', 'product_add_to_cart', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12148194585d080afdee03e2_45076089', 'hook_product_buttons', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8280541985d080afdee3c74_47977974', 'product_additional_info', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19804101315d080afdee68d4_49991176', 'product_refresh', $this->tplIndex);
?>

              </form>
            <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_discounts'} */
class Block_1403358775d080afdeea626_63336995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_customization'} */
class Block_13698384635d080afdef15e2_01215165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-customization.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
            <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_features'} */
class Block_18826943445d080afdef5a25_62311475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>
              <section class="product-features">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['features'], 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </section>
            <?php }?>
          <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_pack_miniature'} */
class Block_12828084755d080afdf07cf5_57640292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                  <?php
}
}
/* {/block 'product_pack_miniature'} */
/* {block 'product_pack'} */
class Block_1581735545d080afdf00775_31853591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
              <section class="product-pack">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pack content','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12828084755d080afdf07cf5_57640292', 'product_pack_miniature', $this->tplIndex);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </section>
            <?php }?>
          <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_miniature'} */
class Block_7092614465d080afdf12bb3_92103212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_16978323885d080afdf0d2b5_57653453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
              <section class="product-accessories">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7092614465d080afdf12bb3_92103212', 'product_miniature', $this->tplIndex);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </section>
            <?php }?>
          <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_3400470745d080afdf173f5_19060805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_attachments'} */
class Block_18110975795d080afdf1a8a7_23190098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
              <section class="product-attachments">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                  <div class="attachment">
                    <h4>
                      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>

                      </a>
                    </h4>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                    </a>
                  </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </section>
            <?php }?>
          <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'page_content'} */
class Block_15714012315d080afde924d0_63339472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1811301315d080afde93d07_04205287', 'product_flags', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4434403285d080afde9d316_51443505', 'product_cover_thumbnails', $this->tplIndex);
?>


          <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20024186125d080afdea00b3_54877912', 'product_reference', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12171580785d080afdea7fc5_37788799', 'product_condition', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2623971555d080afdeb0e06_67772859', 'product_description_short', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18027238325d080afdeb53a6_63003337', 'product_description', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11481465635d080afdeb9049_90136425', 'product_quantities', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9762320965d080afdebfbf6_72077860', 'product_availability', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10208299985d080afdec5155_58423434', 'product_availability_date', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9387425715d080afdecc4e2_67063375', 'product_out_of_stock', $this->tplIndex);
?>

          </div>

          <div class="product-actions">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17954219125d080afded1bd3_40104104', 'product_buy', $this->tplIndex);
?>

          </div>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1403358775d080afdeea626_63336995', 'product_discounts', $this->tplIndex);
?>


          <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13698384635d080afdef15e2_01215165', 'product_customization', $this->tplIndex);
?>

          <?php }?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18826943445d080afdef5a25_62311475', 'product_features', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1581735545d080afdf00775_31853591', 'product_pack', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16978323885d080afdf0d2b5_57653453', 'product_accessories', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3400470745d080afdf173f5_19060805', 'product_footer', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18110975795d080afdf1a8a7_23190098', 'product_attachments', $this->tplIndex);
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
            <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
">
              <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_334576405d080afde90633_42196982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15714012315d080afde924d0_63339472', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14451251265d080afdf3f8c9_84307235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10278658795d080afdf3e701_21558904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14451251265d080afdf3f8c9_84307235', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13397358125d080afde82db6_95616462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13397358125d080afde82db6_95616462',
  ),
  'product_activation' => 
  array (
    0 => 'Block_481664725d080afde85745_33597536',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10108283535d080afde885d1_70175632',
  ),
  'page_header' => 
  array (
    0 => 'Block_1648674035d080afde898f2_32864993',
  ),
  'page_title' => 
  array (
    0 => 'Block_5831969655d080afde8a8b2_08790137',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_334576405d080afde90633_42196982',
  ),
  'page_content' => 
  array (
    0 => 'Block_15714012315d080afde924d0_63339472',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1811301315d080afde93d07_04205287',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_4434403285d080afde9d316_51443505',
  ),
  'product_reference' => 
  array (
    0 => 'Block_20024186125d080afdea00b3_54877912',
  ),
  'product_condition' => 
  array (
    0 => 'Block_12171580785d080afdea7fc5_37788799',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_2623971555d080afdeb0e06_67772859',
  ),
  'product_description' => 
  array (
    0 => 'Block_18027238325d080afdeb53a6_63003337',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_11481465635d080afdeb9049_90136425',
  ),
  'product_availability' => 
  array (
    0 => 'Block_9762320965d080afdebfbf6_72077860',
  ),
  'product_availability_date' => 
  array (
    0 => 'Block_10208299985d080afdec5155_58423434',
  ),
  'product_out_of_stock' => 
  array (
    0 => 'Block_9387425715d080afdecc4e2_67063375',
  ),
  'product_buy' => 
  array (
    0 => 'Block_17954219125d080afded1bd3_40104104',
  ),
  'product_prices' => 
  array (
    0 => 'Block_15686836885d080afded7bf9_11865254',
  ),
  'product_variants' => 
  array (
    0 => 'Block_6132704065d080afdeda563_38421958',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1430380045d080afdedd056_82046786',
  ),
  'hook_product_buttons' => 
  array (
    0 => 'Block_12148194585d080afdee03e2_45076089',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_8280541985d080afdee3c74_47977974',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_19804101315d080afdee68d4_49991176',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1403358775d080afdeea626_63336995',
  ),
  'product_customization' => 
  array (
    0 => 'Block_13698384635d080afdef15e2_01215165',
  ),
  'product_features' => 
  array (
    0 => 'Block_18826943445d080afdef5a25_62311475',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1581735545d080afdf00775_31853591',
  ),
  'product_pack_miniature' => 
  array (
    0 => 'Block_12828084755d080afdf07cf5_57640292',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_16978323885d080afdf0d2b5_57653453',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_7092614465d080afdf12bb3_92103212',
  ),
  'product_footer' => 
  array (
    0 => 'Block_3400470745d080afdf173f5_19060805',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_18110975795d080afdf1a8a7_23190098',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10278658795d080afdf3e701_21558904',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14451251265d080afdf3f8c9_84307235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_481664725d080afde85745_33597536', 'product_activation', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10108283535d080afde885d1_70175632', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334576405d080afde90633_42196982', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10278658795d080afdf3e701_21558904', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
