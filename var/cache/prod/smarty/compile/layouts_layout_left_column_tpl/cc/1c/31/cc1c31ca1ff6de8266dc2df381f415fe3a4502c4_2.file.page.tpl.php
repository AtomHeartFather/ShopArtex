<?php
/* Smarty version 3.1.33, created on 2019-05-15 15:27:27
  from '/home/a/artex73/artex/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc05af7bb7a9_05282517',
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
function content_5cdc05af7bb7a9_05282517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3002028005cdc05af7b53b5_45287052', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18749571725cdc05af7b6524_23485526 extends Smarty_Internal_Block
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
class Block_20894501575cdc05af7b5b17_98367877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18749571725cdc05af7b6524_23485526', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19976744765cdc05af7b84f3_79599561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10643412555cdc05af7b8e27_42621526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20932014065cdc05af7b7e38_09742759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19976744765cdc05af7b84f3_79599561', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10643412555cdc05af7b8e27_42621526', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11939880885cdc05af7ba748_83053586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2880669345cdc05af7b9fe6_13619550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11939880885cdc05af7ba748_83053586', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3002028005cdc05af7b53b5_45287052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3002028005cdc05af7b53b5_45287052',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20894501575cdc05af7b5b17_98367877',
  ),
  'page_title' => 
  array (
    0 => 'Block_18749571725cdc05af7b6524_23485526',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20932014065cdc05af7b7e38_09742759',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19976744765cdc05af7b84f3_79599561',
  ),
  'page_content' => 
  array (
    0 => 'Block_10643412555cdc05af7b8e27_42621526',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2880669345cdc05af7b9fe6_13619550',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11939880885cdc05af7ba748_83053586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20894501575cdc05af7b5b17_98367877', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20932014065cdc05af7b7e38_09742759', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2880669345cdc05af7b9fe6_13619550', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
