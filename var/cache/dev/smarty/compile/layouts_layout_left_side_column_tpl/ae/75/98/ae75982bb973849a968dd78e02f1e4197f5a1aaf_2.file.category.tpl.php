<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:40:54
  from '/var/www/artex/themes/artex/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0808e63ec390_10020214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae75982bb973849a968dd78e02f1e4197f5a1aaf' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/listing/category.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/category.tpl' => 1,
  ),
),false)) {
function content_5d0808e63ec390_10020214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7689067515d0808e63d4b46_72275398', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'category_miniature'} */
class Block_757444435d0808e63e5d63_74124098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->tpl_vars['subcategory']->value), 0, true);
?>
                <?php
}
}
/* {/block 'category_miniature'} */
/* {block 'category_subcategories'} */
class Block_7416207805d0808e63e00b6_52551983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <aside>
      <?php if (count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
        <nav class="subcategories">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
?>
              <li>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_757444435d0808e63e5d63_74124098', 'category_miniature', $this->tplIndex);
?>

              </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </nav>
      <?php }?>
    </aside>
  <?php
}
}
/* {/block 'category_subcategories'} */
/* {block 'product_list_header'} */
class Block_7689067515d0808e63d4b46_72275398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_7689067515d0808e63d4b46_72275398',
  ),
  'category_subcategories' => 
  array (
    0 => 'Block_7416207805d0808e63e00b6_52551983',
  ),
  'category_miniature' => 
  array (
    0 => 'Block_757444435d0808e63e5d63_74124098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
  <div class="category-cover">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
  </div>
  <div id="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7416207805d0808e63e00b6_52551983', 'category_subcategories', $this->tplIndex);
?>


<?php
}
}
/* {/block 'product_list_header'} */
}
