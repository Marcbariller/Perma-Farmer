<?php
/* Smarty version 3.1.33, created on 2019-09-18 12:32:08
  from 'C:\wamp64\www\prestashop\themes\classic\templates\customer\password-infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8207a811b224_26405864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4449fbd75bb4f00fd2d55e2660bc62b3634978e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\customer\\password-infos.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8207a811b224_26405864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16004201605d8207a8107022_41665265', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14375266835d8207a810c1b3_99882000', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5893672005d8207a81161c0_33756352', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_16004201605d8207a8107022_41665265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_16004201605d8207a8107022_41665265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_14375266835d8207a810c1b3_99882000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_14375266835d8207a810c1b3_99882000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul class="ps-alert-success">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['successes']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
      <li class="item">
        <i>
          <svg viewBox="0 0 24 24">
            <path fill="#fff" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
          </svg>
        </i>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success']->value, ENT_QUOTES, 'UTF-8');?>
</p>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_5893672005d8207a81161c0_33756352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_5893672005d8207a81161c0_33756352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul>
    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
  </ul>
<?php
}
}
/* {/block 'page_footer'} */
}
