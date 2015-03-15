<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:56
         compiled from "/home/kngo/workspace/suabotmeiji.com/themes/gomarket/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157588588154d38e181ad1f0-25659979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea6c170418eb469fd54f6be2cece0c1e5034249b' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/themes/gomarket/modules/blockadvertising/blockadvertising.tpl',
      1 => 1373251588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157588588154d38e181ad1f0-25659979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e181c2203_27549400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e181c2203_27549400')) {function content_54d38e181c2203_27549400($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"/></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>