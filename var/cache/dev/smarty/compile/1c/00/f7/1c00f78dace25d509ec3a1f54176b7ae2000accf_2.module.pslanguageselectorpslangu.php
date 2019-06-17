<?php
/* Smarty version 3.1.33, created on 2019-06-18 01:53:23
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0819e3cf2382_96329920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1559758433,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0819e3cf2382_96329920 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/artex/modules/ps_languageselector/ps_languageselector.tpl --><div class="language-selector">
  <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
      <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</a>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<!-- end /var/www/artex/modules/ps_languageselector/ps_languageselector.tpl --><?php }
}
