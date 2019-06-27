<?php
/* Smarty version 3.1.33, created on 2019-06-28 01:11:48
  from '/var/www/artex/themes/artex/templates/catalog/_partials/variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d153f24b98ed3_16019689',
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
function content_5d153f24b98ed3_16019689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18317012245d153f24b8b9e9_43887291', 'variant_links');
?>

<?php }
/* {block 'variant_link_item'} */
class Block_12517976225d153f24b8e2f1_43038264 extends Smarty_Internal_Block
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
class Block_18317012245d153f24b8b9e9_43887291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'variant_links' => 
  array (
    0 => 'Block_18317012245d153f24b8b9e9_43887291',
  ),
  'variant_link_item' => 
  array (
    0 => 'Block_12517976225d153f24b8e2f1_43038264',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12517976225d153f24b8e2f1_43038264', 'variant_link_item', $this->tplIndex);
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
