<?php
/* Smarty version 3.1.33, created on 2019-06-18 14:20:13
  from '/var/www/artex/themes/artex/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d08c8ed41c4a5_47508172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e97d3675d1d9bdf4effae8c7d88eae6a08c7753' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/index.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d08c8ed41c4a5_47508172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11586650035d08c8ed4180f2_51880176', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'hook_home'} */
class Block_21080519665d08c8ed419110_65662008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

  <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11586650035d08c8ed4180f2_51880176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_11586650035d08c8ed4180f2_51880176',
  ),
  'hook_home' => 
  array (
    0 => 'Block_21080519665d08c8ed419110_65662008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21080519665d08c8ed419110_65662008', 'hook_home', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
