<?php
/* Smarty version 3.1.33, created on 2019-06-28 20:59:43
  from '/var/www/artex/themes/artex/templates/catalog/_partials/variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d16558fef7a63_85977897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81cfe72de37f55c99913bcf090827f7870cbb39a' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/variant-links.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d16558fef7a63_85977897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4060369535d16558fee7403_05807987', 'variant_links');
?>

<?php }
/* {block 'variant_link_item'} */
class Block_13314321845d16558feea864_43985844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['variant']->value['type'] === "color") {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
        >
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      <?php
}
}
/* {/block 'variant_link_item'} */
/* {block 'variant_links'} */
class Block_4060369535d16558fee7403_05807987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'variant_links' => 
  array (
    0 => 'Block_4060369535d16558fee7403_05807987',
  ),
  'variant_link_item' => 
  array (
    0 => 'Block_13314321845d16558feea864_43985844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="variant-links">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13314321845d16558feea864_43985844', 'variant_link_item', $this->tplIndex);
?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'variant_links'} */
}
