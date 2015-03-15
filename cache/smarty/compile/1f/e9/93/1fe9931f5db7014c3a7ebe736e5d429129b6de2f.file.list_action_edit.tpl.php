<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:32:18
         compiled from "/home/kngo/workspace/suabotmeiji.com/psadmin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95996391254d38d02a2b510-25797678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe9931f5db7014c3a7ebe736e5d429129b6de2f' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/psadmin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1371713352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95996391254d38d02a2b510-25797678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38d02a38a84_32017233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38d02a38a84_32017233')) {function content_54d38d02a38a84_32017233($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>