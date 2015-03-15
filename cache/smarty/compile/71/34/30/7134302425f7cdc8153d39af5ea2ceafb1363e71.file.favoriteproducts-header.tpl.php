<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:54
         compiled from "/home/kngo/workspace/suabotmeiji.com/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139971993554d38e16087a69-79158489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7134302425f7cdc8153d39af5ea2ceafb1363e71' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1378280194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139971993554d38e16087a69-79158489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e160fbb32_61639640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e160fbb32_61639640')) {function content_54d38e160fbb32_61639640($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>