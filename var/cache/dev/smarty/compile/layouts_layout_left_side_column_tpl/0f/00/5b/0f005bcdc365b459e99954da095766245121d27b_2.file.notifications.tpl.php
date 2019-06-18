<?php
/* Smarty version 3.1.33, created on 2019-06-19 02:25:32
  from '/var/www/artex/themes/artex/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0972eced0461_57609163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f005bcdc365b459e99954da095766245121d27b' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/_partials/notifications.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0972eced0461_57609163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<aside id="notifications">

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14246549605d0972eceb3455_52743129', 'notifications_error');
?>

  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8267735775d0972ecebaac1_89003710', 'notifications_warning');
?>

  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8276361765d0972ecec1bd9_13915020', 'notifications_success');
?>

  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14205515935d0972ececa710_72699961', 'notifications_info');
?>

  <?php }?>

</aside>
<?php }
/* {block 'notifications_error'} */
class Block_14246549605d0972eceb3455_52743129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_14246549605d0972eceb3455_52743129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="notification notification-danger" role="alert" data-alert="danger">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
    <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_8267735775d0972ecebaac1_89003710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_8267735775d0972ecebaac1_89003710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="notification notification-warning" role="alert" data-alert="warning">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
    <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_8276361765d0972ecec1bd9_13915020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_8276361765d0972ecec1bd9_13915020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="notification notification-success" role="alert" data-alert="success">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
    <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_14205515935d0972ececa710_72699961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_14205515935d0972ececa710_72699961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="notification notification-info" role="alert" data-alert="info">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
    <?php
}
}
/* {/block 'notifications_info'} */
}
