<?php
/* Smarty version 3.1.33, created on 2019-06-28 14:27:21
  from '/var/www/artex/themes/artex/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d15f99951b551_02059029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b6b5ae5ba86d1f7802ba366b6d2410a5390d14' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/product.tpl',
      1 => 1561720472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:catalog/_partials/product-cover-light-slider.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5d15f99951b551_02059029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13392971045d15f9994b2849_18629348', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11140454025d15f9994ba9b4_93762094', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20843681805d15f9994d4305_85428904', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_13392971045d15f9994b2849_18629348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_13392971045d15f9994b2849_18629348',
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
class Block_11140454025d15f9994ba9b4_93762094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_11140454025d15f9994ba9b4_93762094',
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
class Block_14875986805d15f9994d68e0_25150537 extends Smarty_Internal_Block
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
class Block_6439127045d15f9994dbdc5_54990458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_15914690505d15f9994dae32_24668557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1 itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6439127045d15f9994dbdc5_54990458', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_8311439095d15f9994d9e59_40305490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15914690505d15f9994dae32_24668557', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_flags'} */
class Block_19228949235d15f9994e1ec1_47402412 extends Smarty_Internal_Block
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
class Block_5689282405d15f9994e92d6_70720284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-light-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_5556058585d15f9994ebcb2_19031812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'product_prices'} */
class Block_453502625d15f9994ee8a3_60945681 extends Smarty_Internal_Block
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
class Block_2119167825d15f9994fb6e4_01817855 extends Smarty_Internal_Block
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
class Block_1823569865d15f9995033c3_58800628 extends Smarty_Internal_Block
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
class Block_1645761325d15f999506f75_05644077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'hook_product_buttons'} */
/* {block 'product_refresh'} */
class Block_940487075d15f99950c6a0_42512242 extends Smarty_Internal_Block
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
class Block_15639854325d15f9994f4c25_06161989 extends Smarty_Internal_Block
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

                
                <div class="col-12 no-padding">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2119167825d15f9994fb6e4_01817855', 'product_variants', $this->tplIndex);
?>

                </div>
                <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product'] == 21)) {?> 
                <div>
                    <ul id="group_3">
              <li class="input-container">
              <input
                id="clowhite"
                class="input-color"
                type="radio"
                data-product-attribute="2"
                name="group[2]"
                value="7"                              >
              <span
                 style="background-color: #fff"                               >
                <span>Белый</span>
              </span>
            </li>
                      <li class="input-container">
              <input
                id="clored"
                class="input-color"
                type="radio"
                data-product-attribute="2"
                name="group[2]"
                value="13"       checked="checked"       >
              <span
                 style="background-color: #FF0000"                               >
                <span>Красный</span>
              </span>
            </li>
                  </ul>
                </div>
                <?php }?>
                <div class="col-12 no-padding">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1823569865d15f9995033c3_58800628', 'product_add_to_cart', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1645761325d15f999506f75_05644077', 'hook_product_buttons', $this->tplIndex);
?>



                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940487075d15f99950c6a0_42512242', 'product_refresh', $this->tplIndex);
?>

                </form>
                <?php
}
}
/* {/block 'product_buy'} */
/* {block 'page_content'} */
class Block_20517056005d15f9994e0f58_41899203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19228949235d15f9994e1ec1_47402412', 'product_flags', $this->tplIndex);
?>

          
          <!-- слайдер картинок -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5689282405d15f9994e92d6_70720284', 'product_cover_thumbnails', $this->tplIndex);
?>

        <div class="product-cart no-gutters">
            <div class="sticky row no-gutters">  
            <div class="col-12">
              <div class="row no-gutters">
                <div class='col-8 p-name'>
                    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5556058585d15f9994ebcb2_19031812', 'page_title', $this->tplIndex);
?>
</h1>
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_453502625d15f9994ee8a3_60945681', 'product_prices', $this->tplIndex);
?>

                </div>
              </div>
            <div>
                                                          <!-- полное описание -->
                            <div class="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                    
                            </div>
            <div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15639854325d15f9994f4c25_06161989', 'product_buy', $this->tplIndex);
?>

            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

          <!-- описание товара -->

          
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7026436195d15f9994dff99_19176142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20517056005d15f9994e0f58_41899203', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3202083275d15f9995187c6_55804293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16601023615d15f999517629_20857487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3202083275d15f9995187c6_55804293', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20843681805d15f9994d4305_85428904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20843681805d15f9994d4305_85428904',
  ),
  'product_activation' => 
  array (
    0 => 'Block_14875986805d15f9994d68e0_25150537',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8311439095d15f9994d9e59_40305490',
  ),
  'page_header' => 
  array (
    0 => 'Block_15914690505d15f9994dae32_24668557',
  ),
  'page_title' => 
  array (
    0 => 'Block_6439127045d15f9994dbdc5_54990458',
    1 => 'Block_5556058585d15f9994ebcb2_19031812',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7026436195d15f9994dff99_19176142',
  ),
  'page_content' => 
  array (
    0 => 'Block_20517056005d15f9994e0f58_41899203',
  ),
  'product_flags' => 
  array (
    0 => 'Block_19228949235d15f9994e1ec1_47402412',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_5689282405d15f9994e92d6_70720284',
  ),
  'product_prices' => 
  array (
    0 => 'Block_453502625d15f9994ee8a3_60945681',
  ),
  'product_buy' => 
  array (
    0 => 'Block_15639854325d15f9994f4c25_06161989',
  ),
  'product_variants' => 
  array (
    0 => 'Block_2119167825d15f9994fb6e4_01817855',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1823569865d15f9995033c3_58800628',
  ),
  'hook_product_buttons' => 
  array (
    0 => 'Block_1645761325d15f999506f75_05644077',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_940487075d15f99950c6a0_42512242',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16601023615d15f999517629_20857487',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3202083275d15f9995187c6_55804293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14875986805d15f9994d68e0_25150537', 'product_activation', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8311439095d15f9994d9e59_40305490', 'page_header_container', $this->tplIndex);
?>

    
   
    
        <!-- основной блок -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7026436195d15f9994dff99_19176142', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16601023615d15f999517629_20857487', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
