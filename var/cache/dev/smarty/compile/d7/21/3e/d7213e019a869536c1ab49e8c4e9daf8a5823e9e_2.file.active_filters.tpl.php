<?php
/* Smarty version 3.1.33, created on 2019-06-26 18:56:54
  from '/var/www/artex/themes/artex/templates/catalog/_partials/active_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1395c60615e5_31159622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7213e019a869536c1ab49e8c4e9daf8a5823e9e' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/active_filters.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1395c60615e5_31159622 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="js-active-search-filters" class="active_filters">
  <h1 class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%facet_label%: %facet_value%','sprintf'=>array('%facet_label%'=>$_smarty_tpl->tpl_vars['filter']->value['facetLabel'],'%facet_value%'=>$_smarty_tpl->tpl_vars['filter']->value['label']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 <a  class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
  <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset all filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></p>
</section>
<?php }
}
