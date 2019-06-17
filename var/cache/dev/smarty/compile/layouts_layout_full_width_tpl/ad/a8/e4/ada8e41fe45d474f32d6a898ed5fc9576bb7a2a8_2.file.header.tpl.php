<?php
/* Smarty version 3.1.33, created on 2019-06-18 01:42:53
  from '/var/www/artex/themes/artex/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d08176db37e72_27773273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada8e41fe45d474f32d6a898ed5fc9576bb7a2a8' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/_partials/header.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d08176db37e72_27773273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18590997095d08176db273f4_32242292', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2347772305d08176db2ab77_89166020', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20132459145d08176db2d7a6_91119999', 'header_logo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8763790705d08176db349c6_92713951', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_18590997095d08176db273f4_32242292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_18590997095d08176db273f4_32242292',
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
class Block_2347772305d08176db2ab77_89166020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_2347772305d08176db2ab77_89166020',
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
class Block_20132459145d08176db2d7a6_91119999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_logo' => 
  array (
    0 => 'Block_20132459145d08176db2d7a6_91119999',
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
class Block_8763790705d08176db349c6_92713951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_8763790705d08176db349c6_92713951',
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
