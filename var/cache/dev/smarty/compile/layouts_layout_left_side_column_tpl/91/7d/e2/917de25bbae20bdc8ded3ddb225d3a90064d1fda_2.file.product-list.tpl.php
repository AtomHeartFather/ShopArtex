<?php
/* Smarty version 3.1.33, created on 2019-06-18 01:53:23
  from '/var/www/artex/themes/artex/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0819e3beba51_66195931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917de25bbae20bdc8ded3ddb225d3a90064d1fda' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/listing/product-list.tpl',
      1 => 1560807584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5d0819e3beba51_66195931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20816155005d0819e3bd4206_05914570', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_11600527615d0819e3bd5254_07074421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h2 class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_3106315715d0819e3bdad58_53645665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_12453317135d0819e3bdfa12_43121869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_11272539275d0819e3be32a5_99832001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_6267424805d0819e3be6763_37603917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_20816155005d0819e3bd4206_05914570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20816155005d0819e3bd4206_05914570',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_11600527615d0819e3bd5254_07074421',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_3106315715d0819e3bdad58_53645665',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_12453317135d0819e3bdfa12_43121869',
  ),
  'product_list' => 
  array (
    0 => 'Block_11272539275d0819e3be32a5_99832001',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_6267424805d0819e3be6763_37603917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11600527615d0819e3bd5254_07074421', 'product_list_header', $this->tplIndex);
?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3106315715d0819e3bdad58_53645665', 'product_list_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12453317135d0819e3bdfa12_43121869', 'product_list_active_filters', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11272539275d0819e3be32a5_99832001', 'product_list', $this->tplIndex);
?>


        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6267424805d0819e3be6763_37603917', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
