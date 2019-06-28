<?php
/* Smarty version 3.1.33, created on 2019-06-28 20:09:13
  from '/var/www/artex/themes/artex/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1649b9ddc390_02946333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada8e41fe45d474f32d6a898ed5fc9576bb7a2a8' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/_partials/header.tpl',
      1 => 1561637366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1649b9ddc390_02946333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7078628455d1649b9dbea34_33958830', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16788669065d1649b9dc4339_98404097', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1556892405d1649b9dc90d5_72615420', 'header_logo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12308432215d1649b9dd81e7_07415169', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_7078628455d1649b9dbea34_33958830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_7078628455d1649b9dbea34_33958830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_16788669065d1649b9dc4339_98404097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_16788669065d1649b9dc4339_98404097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-nav">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_logo'} */
class Block_1556892405d1649b9dc90d5_72615420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_logo' => 
  array (
    0 => 'Block_1556892405d1649b9dc90d5_72615420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="logo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}
}
/* {/block 'header_logo'} */
/* {block 'header_top'} */
class Block_12308432215d1649b9dd81e7_07415169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_12308432215d1649b9dd81e7_07415169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

  </div>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>


<?php
}
}
/* {/block 'header_top'} */
}
