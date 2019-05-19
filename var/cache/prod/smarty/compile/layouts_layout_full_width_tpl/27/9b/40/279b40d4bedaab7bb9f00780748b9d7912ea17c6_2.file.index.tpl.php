<?php
/* Smarty version 3.1.33, created on 2019-05-20 02:22:11
  from '/home/a/artex73/artex/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce1e523e35499_32527197',
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
function content_5ce1e523e35499_32527197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8610085505ce1e523e31eb2_54614749', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17376206125ce1e523e326e1_87574381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_8512428085ce1e523e338f6_54404637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_7339981285ce1e523e33235_31411914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8512428085ce1e523e338f6_54404637', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8610085505ce1e523e31eb2_54614749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8610085505ce1e523e31eb2_54614749',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17376206125ce1e523e326e1_87574381',
  ),
  'page_content' => 
  array (
    0 => 'Block_7339981285ce1e523e33235_31411914',
  ),
  'hook_home' => 
  array (
    0 => 'Block_8512428085ce1e523e338f6_54404637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17376206125ce1e523e326e1_87574381', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7339981285ce1e523e33235_31411914', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
