<?php
/* Smarty version 3.1.33, created on 2019-06-18 00:40:54
  from '/var/www/artex/themes/artex/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0808e66e6ee8_14393639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305777851dbcdb8d51c308b5ec4d63a2d9b8dbe7' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/_partials/footer.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0808e66e6ee8_14393639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10954562235d0808e66d7364_22598640', 'hook_footer_before');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16653280875d0808e66da057_85503193', 'hook_footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2703220965d0808e66dcd70_55455768', 'hook_footer_after');
?>


<p>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10500136415d0808e66dff14_40913489', 'copyright_link');
?>

</p>
<?php }
/* {block 'hook_footer_before'} */
class Block_10954562235d0808e66d7364_22598640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_10954562235d0808e66d7364_22598640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_16653280875d0808e66da057_85503193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_16653280875d0808e66da057_85503193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_2703220965d0808e66dcd70_55455768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2703220965d0808e66dcd70_55455768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_10500136415d0808e66dff14_40913489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_10500136415d0808e66dff14_40913489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="_blank" href="http://www.prestashop.com" target="_blank">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </a>
  <?php
}
}
/* {/block 'copyright_link'} */
}
