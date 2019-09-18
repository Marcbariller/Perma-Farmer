<?php
/* Smarty version 3.1.33, created on 2019-09-18 14:10:12
  from 'C:\wamp64\www\prestashop\admin769lrgqjt\themes\default\template\controllers\slip\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d821ea44a4238_79557988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca72e6f3a2ec5492e40d470e109963fed956a68e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin769lrgqjt\\themes\\default\\template\\controllers\\slip\\helpers\\form\\form.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d821ea44a4238_79557988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2231850845d821ea44a17f3_71967255', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_2231850845d821ea44a17f3_71967255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2231850845d821ea44a17f3_71967255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	$(document).ready(function() {
		var btn_save_date = $('span[class~="process-icon-save-date"]').parent();
		var btn_submit_date = $('#submitPrint');

		if (btn_save_date.length > 0 && btn_submit_date.length > 0)
		{
			btn_submit_date.hide();
			btn_save_date.find('span').removeClass('process-icon-save-date');
			btn_save_date.find('span').addClass('process-icon-save-calendar');
			btn_save_date.click(function() {
				btn_submit_date.before('<input type="hidden" name="'+btn_submit_date.attr("name")+'" value="1" />');

				$('#order_slip_form').submit();
			});
		}
	});

<?php
}
}
/* {/block 'script'} */
}
