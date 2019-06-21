<?php
/* Smarty version 3.1.33, created on 2019-06-21 21:10:52
  from '/var/www/artex/themes/artex/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0d1dac782847_82273651',
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
function content_5d0d1dac782847_82273651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7118828475d0d1dac775cf5_91674665', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5111914415d0d1dac779103_44053142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_14830238965d0d1dac778075_75973850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5111914415d0d1dac779103_44053142', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_15811976355d0d1dac776fa6_55037178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14830238965d0d1dac778075_75973850', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_20200190365d0d1dac77cd61_74889195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19194797355d0d1dac77bcc4_40263177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20200190365d0d1dac77cd61_74889195', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11666055615d0d1dac780145_74735907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13401722965d0d1dac77f0b8_14116064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11666055615d0d1dac780145_74735907', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7118828475d0d1dac775cf5_91674665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7118828475d0d1dac775cf5_91674665',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15811976355d0d1dac776fa6_55037178',
  ),
  'page_header' => 
  array (
    0 => 'Block_14830238965d0d1dac778075_75973850',
  ),
  'page_title' => 
  array (
    0 => 'Block_5111914415d0d1dac779103_44053142',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19194797355d0d1dac77bcc4_40263177',
  ),
  'page_content' => 
  array (
    0 => 'Block_20200190365d0d1dac77cd61_74889195',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13401722965d0d1dac77f0b8_14116064',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11666055615d0d1dac780145_74735907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15811976355d0d1dac776fa6_55037178', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19194797355d0d1dac77bcc4_40263177', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13401722965d0d1dac77f0b8_14116064', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
