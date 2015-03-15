<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:56
         compiled from "/home/kngo/workspace/suabotmeiji.com/themes/gomarket/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59463187054d38e18dfc6f7-08858676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab37ee49b1aa3898153bdc084f0d261ef9a78b9c' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/themes/gomarket/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1374202806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59463187054d38e18dfc6f7-08858676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e18e45960_78128013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e18e45960_78128013')) {function content_54d38e18e45960_78128013($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/kngo/workspace/suabotmeiji.com/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/home/kngo/workspace/suabotmeiji.com/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'About Store','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
	<a class="show_hide_footer" href="javascript:void(0)">icon</a>
	<ul class="f_block_content">
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?><li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Tel','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Email','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_function_mailto(array('address'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, 'htmlall', 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>