<?php
/* Smarty version 3.1.33, created on 2019-06-18 01:42:53
  from '/var/www/artex/themes/artex/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d08176da6f0c7_79959088',
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
function content_5d08176da6f0c7_79959088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15658619385d08176da5e6a9_23547994', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15491808845d08176da61e11_11118197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_4592742505d08176da60c00_44201168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15491808845d08176da61e11_11118197', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_19369712645d08176da5f910_56892955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4592742505d08176da60c00_44201168', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_16904190685d08176da672c0_17319644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11252352385d08176da655f9_80786924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16904190685d08176da672c0_17319644', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_13155978595d08176da6c1a6_20021436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4302912965d08176da6a550_66886051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13155978595d08176da6c1a6_20021436', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15658619385d08176da5e6a9_23547994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15658619385d08176da5e6a9_23547994',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19369712645d08176da5f910_56892955',
  ),
  'page_header' => 
  array (
    0 => 'Block_4592742505d08176da60c00_44201168',
  ),
  'page_title' => 
  array (
    0 => 'Block_15491808845d08176da61e11_11118197',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11252352385d08176da655f9_80786924',
  ),
  'page_content' => 
  array (
    0 => 'Block_16904190685d08176da672c0_17319644',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4302912965d08176da6a550_66886051',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13155978595d08176da6c1a6_20021436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19369712645d08176da5f910_56892955', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11252352385d08176da655f9_80786924', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4302912965d08176da6a550_66886051', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
