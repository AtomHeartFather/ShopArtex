<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:40:54
  from '/var/www/artex/themes/artex/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0808e6409047_30840050',
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
function content_5d0808e6409047_30840050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14500517145d0808e63f3aa9_52146394', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_3114124655d0808e63f4b11_34586211 extends Smarty_Internal_Block
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
class Block_13335852735d0808e63fa976_48292345 extends Smarty_Internal_Block
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
class Block_1811662355d0808e63fd996_67885074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_1340172915d0808e6400ba1_46637258 extends Smarty_Internal_Block
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
class Block_15271758085d0808e6403e02_80585310 extends Smarty_Internal_Block
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
class Block_14500517145d0808e63f3aa9_52146394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14500517145d0808e63f3aa9_52146394',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_3114124655d0808e63f4b11_34586211',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_13335852735d0808e63fa976_48292345',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_1811662355d0808e63fd996_67885074',
  ),
  'product_list' => 
  array (
    0 => 'Block_1340172915d0808e6400ba1_46637258',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_15271758085d0808e6403e02_80585310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3114124655d0808e63f4b11_34586211', 'product_list_header', $this->tplIndex);
?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13335852735d0808e63fa976_48292345', 'product_list_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1811662355d0808e63fd996_67885074', 'product_list_active_filters', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1340172915d0808e6400ba1_46637258', 'product_list', $this->tplIndex);
?>


        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15271758085d0808e6403e02_80585310', 'product_list_bottom', $this->tplIndex);
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
