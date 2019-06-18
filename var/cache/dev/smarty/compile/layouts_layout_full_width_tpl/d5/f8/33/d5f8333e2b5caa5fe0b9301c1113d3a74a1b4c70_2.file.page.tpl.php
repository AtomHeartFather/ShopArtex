<?php
/* Smarty version 3.1.33, created on 2019-06-18 14:20:13
  from '/var/www/artex/themes/artex/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d08c8ed42df48_76157271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8333e2b5caa5fe0b9301c1113d3a74a1b4c70' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/page.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d08c8ed42df48_76157271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15887287935d08c8ed420e58_30555036', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10251620485d08c8ed4241f6_65189792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_12147264515d08c8ed423104_61457122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10251620485d08c8ed4241f6_65189792', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_13023538045d08c8ed421fd0_48840888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12147264515d08c8ed423104_61457122', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_14815339965d08c8ed427fe0_93812375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21142789665d08c8ed426ed9_15568862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14815339965d08c8ed427fe0_93812375', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16507957345d08c8ed42b6f0_36053731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12983059925d08c8ed42a467_93704147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16507957345d08c8ed42b6f0_36053731', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15887287935d08c8ed420e58_30555036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15887287935d08c8ed420e58_30555036',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13023538045d08c8ed421fd0_48840888',
  ),
  'page_header' => 
  array (
    0 => 'Block_12147264515d08c8ed423104_61457122',
  ),
  'page_title' => 
  array (
    0 => 'Block_10251620485d08c8ed4241f6_65189792',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21142789665d08c8ed426ed9_15568862',
  ),
  'page_content' => 
  array (
    0 => 'Block_14815339965d08c8ed427fe0_93812375',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12983059925d08c8ed42a467_93704147',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16507957345d08c8ed42b6f0_36053731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13023538045d08c8ed421fd0_48840888', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21142789665d08c8ed426ed9_15568862', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12983059925d08c8ed42a467_93704147', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
