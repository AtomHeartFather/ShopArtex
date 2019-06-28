<?php
/* Smarty version 3.1.33, created on 2019-06-28 20:59:44
  from '/var/www/artex/themes/artex/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1655900f5739_43409818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8333e2b5caa5fe0b9301c1113d3a74a1b4c70' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/page.tpl',
      1 => 1561636759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1655900f5739_43409818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5997583005d1655900ed923_36852053', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content'} */
class Block_17610078975d1655900eff88_61236382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17436964525d1655900eefa3_98146643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17610078975d1655900eff88_61236382', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4153660285d1655900f31e3_93194500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10432690045d1655900f2264_76167683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4153660285d1655900f31e3_93194500', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5997583005d1655900ed923_36852053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5997583005d1655900ed923_36852053',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17436964525d1655900eefa3_98146643',
  ),
  'page_content' => 
  array (
    0 => 'Block_17610078975d1655900eff88_61236382',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10432690045d1655900f2264_76167683',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4153660285d1655900f31e3_93194500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

       

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17436964525d1655900eefa3_98146643', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10432690045d1655900f2264_76167683', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
