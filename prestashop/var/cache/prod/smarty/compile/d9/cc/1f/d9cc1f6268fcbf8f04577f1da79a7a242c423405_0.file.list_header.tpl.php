<?php
/* Smarty version 3.1.33, created on 2019-09-18 14:25:39
  from 'C:\wamp64\www\prestashop\admin769lrgqjt\themes\default\template\controllers\tracking\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8222437097d6_96209103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9cc1f6268fcbf8f04577f1da79a7a242c423405' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin769lrgqjt\\themes\\default\\template\\controllers\\tracking\\helpers\\list\\list_header.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8222437097d6_96209103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19663470465d8222436fccb2_41999768', "preTable");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_19663470465d8222436fccb2_41999768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_19663470465d8222436fccb2_41999768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['list_id']->value == 'empty_categories') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block "preTable"} */
}
