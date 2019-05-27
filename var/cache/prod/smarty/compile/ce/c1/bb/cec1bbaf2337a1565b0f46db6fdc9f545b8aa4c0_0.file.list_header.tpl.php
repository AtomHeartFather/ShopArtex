<?php
/* Smarty version 3.1.33, created on 2019-05-21 17:34:14
  from '/home/a/artex73/artex/public_html/admin896np0lun/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce40c6635c741_06738461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec1bbaf2337a1565b0f46db6fdc9f545b8aa4c0' => 
    array (
      0 => '/home/a/artex73/artex/public_html/admin896np0lun/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1556443773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce40c6635c741_06738461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17032540155ce40c6635b566_30190064', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_17032540155ce40c6635b566_30190064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_17032540155ce40c6635b566_30190064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
