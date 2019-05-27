<?php
/* Smarty version 3.1.33, created on 2019-05-27 18:30:47
  from '/home/a/artex73/artex/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec02a7c57d99_95594917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279b40d4bedaab7bb9f00780748b9d7912ea17c6' => 
    array (
      0 => '/home/a/artex73/artex/public_html/themes/classic/templates/index.tpl',
      1 => 1556443793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec02a7c57d99_95594917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18334650805cec02a7c54ae4_23508313', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_12249089155cec02a7c55272_45933479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7573803355cec02a7c56406_07762357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_17314659075cec02a7c55d32_79596327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7573803355cec02a7c56406_07762357', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18334650805cec02a7c54ae4_23508313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18334650805cec02a7c54ae4_23508313',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12249089155cec02a7c55272_45933479',
  ),
  'page_content' => 
  array (
    0 => 'Block_17314659075cec02a7c55d32_79596327',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7573803355cec02a7c56406_07762357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12249089155cec02a7c55272_45933479', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17314659075cec02a7c55d32_79596327', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
