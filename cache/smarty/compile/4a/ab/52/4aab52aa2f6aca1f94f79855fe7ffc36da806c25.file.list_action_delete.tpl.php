<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:32:18
         compiled from "/home/kngo/workspace/suabotmeiji.com/psadmin/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151937691054d38d02a5e5c0-24446354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aab52aa2f6aca1f94f79855fe7ffc36da806c25' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/psadmin/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1371713352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151937691054d38d02a5e5c0-24446354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38d02a7b3c9_86951556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38d02a7b3c9_86951556')) {function content_54d38d02a7b3c9_86951556($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>