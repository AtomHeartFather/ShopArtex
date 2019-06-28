<?php
/* Smarty version 3.1.33, created on 2019-06-28 15:56:39
  from '/var/www/artex/themes/artex/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d160e871a19d0_85251227',
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
function content_5d160e871a19d0_85251227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16802561535d160e871443c5_62316269', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8566024365d160e8714ad06_40787258', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17345349645d160e87162ea1_39839471', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_16802561535d160e871443c5_62316269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_16802561535d160e871443c5_62316269',
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
class Block_8566024365d160e8714ad06_40787258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8566024365d160e8714ad06_40787258',
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
class Block_13377113835d160e871653e5_29307933 extends Smarty_Internal_Block
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
class Block_11679213935d160e8716a486_43671284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_15609964285d160e87169512_85144626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1 itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11679213935d160e8716a486_43671284', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_487408685d160e87168558_10302905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15609964285d160e87169512_85144626', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_flags'} */
class Block_3604682475d160e87170098_09511612 extends Smarty_Internal_Block
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
class Block_9632418805d160e87176cb3_92466725 extends Smarty_Internal_Block
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
class Block_15901741305d160e8717a0c0_86248264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'product_prices'} */
class Block_3785749085d160e8717cb93_60900936 extends Smarty_Internal_Block
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
class Block_12458009065d160e871897d1_58696654 extends Smarty_Internal_Block
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
class Block_1486616745d160e8718ef03_83606431 extends Smarty_Internal_Block
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
class Block_12377652425d160e871917c6_03032833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'hook_product_buttons'} */
/* {block 'product_refresh'} */
class Block_18720596745d160e871954c0_14320189 extends Smarty_Internal_Block
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
class Block_6846762445d160e87182096_87098796 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12458009065d160e871897d1_58696654', 'product_variants', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1486616745d160e8718ef03_83606431', 'product_add_to_cart', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12377652425d160e871917c6_03032833', 'hook_product_buttons', $this->tplIndex);
?>



                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18720596745d160e871954c0_14320189', 'product_refresh', $this->tplIndex);
?>

                </form>
                <?php
}
}
/* {/block 'product_buy'} */
/* {block 'page_content'} */
class Block_11005388055d160e8716f130_25641615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3604682475d160e87170098_09511612', 'product_flags', $this->tplIndex);
?>

          
          <!-- слайдер картинок -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9632418805d160e87176cb3_92466725', 'product_cover_thumbnails', $this->tplIndex);
?>

        <div class="product-cart no-gutters">
            <div class="sticky row no-gutters">  
            <div class="col-12">
              <div class="row no-gutters">
                <div class='col-8 p-name'>
                    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15901741305d160e8717a0c0_86248264', 'page_title', $this->tplIndex);
?>
</h1>
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3785749085d160e8717cb93_60900936', 'product_prices', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6846762445d160e87182096_87098796', 'product_buy', $this->tplIndex);
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
class Block_6166666435d160e8716e1b7_11223271 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11005388055d160e8716f130_25641615', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14691782705d160e8719f043_71712118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11419244995d160e8719e088_87417241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14691782705d160e8719f043_71712118', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17345349645d160e87162ea1_39839471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17345349645d160e87162ea1_39839471',
  ),
  'product_activation' => 
  array (
    0 => 'Block_13377113835d160e871653e5_29307933',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_487408685d160e87168558_10302905',
  ),
  'page_header' => 
  array (
    0 => 'Block_15609964285d160e87169512_85144626',
  ),
  'page_title' => 
  array (
    0 => 'Block_11679213935d160e8716a486_43671284',
    1 => 'Block_15901741305d160e8717a0c0_86248264',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6166666435d160e8716e1b7_11223271',
  ),
  'page_content' => 
  array (
    0 => 'Block_11005388055d160e8716f130_25641615',
  ),
  'product_flags' => 
  array (
    0 => 'Block_3604682475d160e87170098_09511612',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_9632418805d160e87176cb3_92466725',
  ),
  'product_prices' => 
  array (
    0 => 'Block_3785749085d160e8717cb93_60900936',
  ),
  'product_buy' => 
  array (
    0 => 'Block_6846762445d160e87182096_87098796',
  ),
  'product_variants' => 
  array (
    0 => 'Block_12458009065d160e871897d1_58696654',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1486616745d160e8718ef03_83606431',
  ),
  'hook_product_buttons' => 
  array (
    0 => 'Block_12377652425d160e871917c6_03032833',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_18720596745d160e871954c0_14320189',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11419244995d160e8719e088_87417241',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14691782705d160e8719f043_71712118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13377113835d160e871653e5_29307933', 'product_activation', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_487408685d160e87168558_10302905', 'page_header_container', $this->tplIndex);
?>

    
   
    
        <!-- основной блок -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6166666435d160e8716e1b7_11223271', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11419244995d160e8719e088_87417241', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
