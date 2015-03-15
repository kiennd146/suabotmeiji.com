<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:54
         compiled from "/home/kngo/workspace/suabotmeiji.com/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41004331254d38e1610fce5-11953786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e73f51d5c65e7116455ffaea07a14af18e1150' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/modules/feeder/feederHeader.tpl',
      1 => 1371713352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41004331254d38e1610fce5-11953786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e1611f955_46987880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e1611f955_46987880')) {function content_54d38e1611f955_46987880($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/kngo/workspace/suabotmeiji.com/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>