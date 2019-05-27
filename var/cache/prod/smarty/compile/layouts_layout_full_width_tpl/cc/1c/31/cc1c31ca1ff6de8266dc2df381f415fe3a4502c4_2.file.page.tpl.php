<?php
/* Smarty version 3.1.33, created on 2019-05-27 18:30:47
  from '/home/a/artex73/artex/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec02a7c63ef2_72886201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc1c31ca1ff6de8266dc2df381f415fe3a4502c4' => 
    array (
      0 => '/home/a/artex73/artex/public_html/themes/classic/templates/page.tpl',
      1 => 1556443793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec02a7c63ef2_72886201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6430632265cec02a7c5c3c0_92805498', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14595300895cec02a7c5d3b4_58924383 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_4947933665cec02a7c5cad5_66718731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14595300895cec02a7c5d3b4_58924383', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10435466855cec02a7c5fe91_92131986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15528368575cec02a7c60921_43668805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15235636275cec02a7c5f7c7_16609963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10435466855cec02a7c5fe91_92131986', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15528368575cec02a7c60921_43668805', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17109220225cec02a7c62e10_20829483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17450468885cec02a7c62655_29996472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17109220225cec02a7c62e10_20829483', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6430632265cec02a7c5c3c0_92805498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6430632265cec02a7c5c3c0_92805498',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4947933665cec02a7c5cad5_66718731',
  ),
  'page_title' => 
  array (
    0 => 'Block_14595300895cec02a7c5d3b4_58924383',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15235636275cec02a7c5f7c7_16609963',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10435466855cec02a7c5fe91_92131986',
  ),
  'page_content' => 
  array (
    0 => 'Block_15528368575cec02a7c60921_43668805',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17450468885cec02a7c62655_29996472',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17109220225cec02a7c62e10_20829483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4947933665cec02a7c5cad5_66718731', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15235636275cec02a7c5f7c7_16609963', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17450468885cec02a7c62655_29996472', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
