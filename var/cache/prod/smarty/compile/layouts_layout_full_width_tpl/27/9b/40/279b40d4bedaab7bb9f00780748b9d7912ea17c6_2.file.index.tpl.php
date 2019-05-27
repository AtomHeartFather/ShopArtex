<?php
/* Smarty version 3.1.33, created on 2019-05-27 18:17:21
  from '/home/a/artex73/artex/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cebff81cd7ed8_52484458',
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
function content_5cebff81cd7ed8_52484458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11326550425cebff81cd44f3_70413110', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5819792885cebff81cd4cb1_42328579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14847117965cebff81cd5f96_40318292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8256739015cebff81cd5873_98722460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14847117965cebff81cd5f96_40318292', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11326550425cebff81cd44f3_70413110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_11326550425cebff81cd44f3_70413110',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5819792885cebff81cd4cb1_42328579',
  ),
  'page_content' => 
  array (
    0 => 'Block_8256739015cebff81cd5873_98722460',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14847117965cebff81cd5f96_40318292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5819792885cebff81cd4cb1_42328579', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8256739015cebff81cd5873_98722460', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
