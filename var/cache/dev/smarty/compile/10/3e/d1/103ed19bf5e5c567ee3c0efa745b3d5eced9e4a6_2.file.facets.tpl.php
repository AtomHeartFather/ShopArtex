<?php
/* Smarty version 3.1.33, created on 2019-06-28 20:09:13
  from '/var/www/artex/themes/artex/templates/catalog/_partials/facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1649b9ac4bb0_35059108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '103ed19bf5e5c567ee3c0efa745b3d5eced9e4a6' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/facets.tpl',
      1 => 1560709156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1649b9ac4bb0_35059108 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search_filters">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
      <section class="facet">
        <h1 class="h3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
        <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                <li>
                  <label>
                    <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                      <input
                        data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>
                        type="checkbox"
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                      >
                    <?php } else { ?>
                      <input
                        data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>
                        type="radio"
                        name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                      >
                    <?php }?>

                    <a
                      rel="nofollow"
                      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                      class="js-search-link <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>"
                    >
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                        <span class="magnitude"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php }?>
                    </a>
                  </label>
                </li>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <form>
            <input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select name="q">
              <option disabled selected hidden><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <option
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                      selected
                      value="<?php echo htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacets'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                  >
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                      (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                    <?php }?>
                  </option>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?>
              <button class="ps-hidden-by-js" type="submit">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            <?php }?>
          </form>
        <?php }?>
      </section>
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
