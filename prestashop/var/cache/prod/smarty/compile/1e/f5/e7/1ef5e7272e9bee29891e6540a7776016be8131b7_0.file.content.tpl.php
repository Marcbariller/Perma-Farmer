<?php
/* Smarty version 3.1.33, created on 2019-09-18 12:35:35
  from 'C:\wamp64\www\prestashop\admin769lrgqjt\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8208773b9532_94230421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef5e7272e9bee29891e6540a7776016be8131b7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin769lrgqjt\\themes\\default\\template\\content.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8208773b9532_94230421 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
