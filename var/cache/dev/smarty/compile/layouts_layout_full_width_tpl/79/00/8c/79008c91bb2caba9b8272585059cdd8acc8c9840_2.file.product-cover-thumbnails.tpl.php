<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:35:12
  from '/var/www/artex/themes/artex/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d080790938ab7_42011336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79008c91bb2caba9b8272585059cdd8acc8c9840' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d080790938ab7_42011336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17924534205d0807909248c3_12783263', 'product_cover');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16050180275d08079092fb86_93505178', 'product_images');
?>

</div>
<?php }
/* {block 'product_cover'} */
class Block_17924534205d0807909248c3_12783263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_17924534205d0807909248c3_12783263',
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
class Block_16050180275d08079092fb86_93505178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_16050180275d08079092fb86_93505178',
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
