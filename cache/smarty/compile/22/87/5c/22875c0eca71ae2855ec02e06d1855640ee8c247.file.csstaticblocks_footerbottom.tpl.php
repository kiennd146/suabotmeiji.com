<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:54
         compiled from "/home/kngo/workspace/suabotmeiji.com/modules/csstaticblocks/views/templates/hook/csstaticblocks_footerbottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74369245054d38e16e12089-42781131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22875c0eca71ae2855ec02e06d1855640ee8c247' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/modules/csstaticblocks/views/templates/hook/csstaticblocks_footerbottom.tpl',
      1 => 1371713352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74369245054d38e16e12089-42781131',
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
  'unifunc' => 'content_54d38e16e34006_96218839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e16e34006_96218839')) {function content_54d38e16e34006_96218839($_smarty_tpl) {?><!-- Static Block module -->
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