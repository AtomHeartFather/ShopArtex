<?php
/* Smarty version 3.1.33, created on 2019-06-28 01:10:57
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d153ef15e0fb1_28724150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1559758433,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d153ef15e0fb1_28724150 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/artex/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['rendered_active_filters']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['rendered_active_filters']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['rendered_facets']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['rendered_facets']->value;?>

<?php }?>
<!-- end /var/www/artex/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
