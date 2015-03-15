<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:56
         compiled from "/home/kngo/workspace/suabotmeiji.com/modules/csstaticblocks/views/templates/hook/csstaticblocks_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99716158154d38e18c33fa1-27745585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab7bd4cd1fcdc0f8ac9b729e75e998b4cdf6d5e' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/modules/csstaticblocks/views/templates/hook/csstaticblocks_footer.tpl',
      1 => 1371713352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99716158154d38e18c33fa1-27745585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_list' => 0,
    'cookie' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e18c5b4f0_32821583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e18c5b4f0_32821583')) {function content_54d38e18c5b4f0_32821583($_smarty_tpl) {?><!-- Static Block module -->
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang])){?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>

	<?php }?>
<?php } ?>
<!-- /Static block module --><?php }} ?>