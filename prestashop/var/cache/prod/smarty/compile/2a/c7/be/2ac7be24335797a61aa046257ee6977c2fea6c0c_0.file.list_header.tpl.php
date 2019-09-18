<?php
/* Smarty version 3.1.33, created on 2019-09-18 14:25:43
  from 'C:\wamp64\www\prestashop\admin769lrgqjt\themes\default\template\controllers\attributes_groups\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8222478edff2_45646777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ac7be24335797a61aa046257ee6977c2fea6c0c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin769lrgqjt\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\list\\list_header.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8222478edff2_45646777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1625206955d8222478ec202_62532007', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1625206955d8222478ec202_62532007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1625206955d8222478ec202_62532007',
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
