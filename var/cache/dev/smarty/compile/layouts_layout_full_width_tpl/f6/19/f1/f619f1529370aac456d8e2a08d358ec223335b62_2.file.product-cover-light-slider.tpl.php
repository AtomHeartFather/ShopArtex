<?php
/* Smarty version 3.1.33, created on 2019-06-28 14:27:22
  from '/var/www/artex/themes/artex/templates/catalog/_partials/product-cover-light-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d15f99a01ac06_71377310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f619f1529370aac456d8e2a08d358ec223335b62' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/product-cover-light-slider.tpl',
      1 => 1561720547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d15f99a01ac06_71377310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


 
<!-- <div class="images-container">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6815250675d15f999f27672_77259365', 'product_cover');
?>

-->

<!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16476534185d15f999f39e95_50164505', 'product_images');
?>

-->  
  <div class="no-gutters">
	<ul id='lightSlider' <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product'] == 21)) {?> style="display: none;" <?php }?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                        <li>
                           <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image"> 
                        <!--    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">  -->
                        </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
	</ul>		
  </div> 
        
<!-- end /var/www/artex/modules/ps_imageslider/views/templates/hook/slider.tpl -->
<!-- end module:ps_imageslider/views/templates/hook/slider.tpl -->

        <?php }
/* {block 'product_cover'} */
class Block_6815250675d15f999f27672_77259365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_6815250675d15f999f27672_77259365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
    </div>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_16476534185d15f999f39e95_50164505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_16476534185d15f999f39e95_50164505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-images">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
        <li><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="100" itemprop="image"></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php
}
}
/* {/block 'product_images'} */
}
