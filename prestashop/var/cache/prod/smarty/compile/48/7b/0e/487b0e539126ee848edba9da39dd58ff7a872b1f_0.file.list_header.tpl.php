<?php
/* Smarty version 3.1.33, created on 2019-09-18 14:30:03
  from 'C:\wamp64\www\prestashop\admin769lrgqjt\themes\default\template\controllers\addresses\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d82234ba79094_49582469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '487b0e539126ee848edba9da39dd58ff7a872b1f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin769lrgqjt\\themes\\default\\template\\controllers\\addresses\\helpers\\list\\list_header.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d82234ba79094_49582469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18253768345d82234ba74bd0_03010497', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_18253768345d82234ba74bd0_03010497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_18253768345d82234ba74bd0_03010497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
