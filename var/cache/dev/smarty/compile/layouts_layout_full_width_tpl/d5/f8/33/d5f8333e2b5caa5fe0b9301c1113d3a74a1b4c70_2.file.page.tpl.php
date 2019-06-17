<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:36:23
  from '/var/www/artex/themes/artex/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0807d7b1aa64_87468527',
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
function content_5d0807d7b1aa64_87468527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19038290525d0807d7b0e5e4_15215606', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12816460585d0807d7b115f1_37308469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_18886697905d0807d7b10638_59691730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12816460585d0807d7b115f1_37308469', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_16750471185d0807d7b0f639_44406412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18886697905d0807d7b10638_59691730', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_11219623385d0807d7b14fa3_58311774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13286554995d0807d7b13fc7_26775614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11219623385d0807d7b14fa3_58311774', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20663735375d0807d7b18422_90087664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14141016125d0807d7b17331_33700489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20663735375d0807d7b18422_90087664', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19038290525d0807d7b0e5e4_15215606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19038290525d0807d7b0e5e4_15215606',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16750471185d0807d7b0f639_44406412',
  ),
  'page_header' => 
  array (
    0 => 'Block_18886697905d0807d7b10638_59691730',
  ),
  'page_title' => 
  array (
    0 => 'Block_12816460585d0807d7b115f1_37308469',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13286554995d0807d7b13fc7_26775614',
  ),
  'page_content' => 
  array (
    0 => 'Block_11219623385d0807d7b14fa3_58311774',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14141016125d0807d7b17331_33700489',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20663735375d0807d7b18422_90087664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16750471185d0807d7b0f639_44406412', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13286554995d0807d7b13fc7_26775614', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14141016125d0807d7b17331_33700489', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
