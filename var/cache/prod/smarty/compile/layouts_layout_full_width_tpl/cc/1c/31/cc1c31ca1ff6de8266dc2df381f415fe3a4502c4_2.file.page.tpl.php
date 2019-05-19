<?php
/* Smarty version 3.1.33, created on 2019-05-20 02:22:11
  from '/home/a/artex73/artex/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce1e523e470c3_13356711',
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
function content_5ce1e523e470c3_13356711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3170578185ce1e523e3a6a2_48508557', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1593490845ce1e523e3b899_70972768 extends Smarty_Internal_Block
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
class Block_489376035ce1e523e3af40_82349549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1593490845ce1e523e3b899_70972768', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10850696385ce1e523e441b4_68441645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15397140845ce1e523e44b68_32767105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5560243085ce1e523e43aa5_47578932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10850696385ce1e523e441b4_68441645', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15397140845ce1e523e44b68_32767105', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5085916935ce1e523e460c7_53879662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8258843845ce1e523e459f7_12912881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5085916935ce1e523e460c7_53879662', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3170578185ce1e523e3a6a2_48508557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3170578185ce1e523e3a6a2_48508557',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_489376035ce1e523e3af40_82349549',
  ),
  'page_title' => 
  array (
    0 => 'Block_1593490845ce1e523e3b899_70972768',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5560243085ce1e523e43aa5_47578932',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10850696385ce1e523e441b4_68441645',
  ),
  'page_content' => 
  array (
    0 => 'Block_15397140845ce1e523e44b68_32767105',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8258843845ce1e523e459f7_12912881',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5085916935ce1e523e460c7_53879662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489376035ce1e523e3af40_82349549', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5560243085ce1e523e43aa5_47578932', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8258843845ce1e523e459f7_12912881', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
