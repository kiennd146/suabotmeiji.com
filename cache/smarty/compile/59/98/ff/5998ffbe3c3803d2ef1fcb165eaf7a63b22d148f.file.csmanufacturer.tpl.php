<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:56
         compiled from "/home/kngo/workspace/suabotmeiji.com/modules/csmanufacturer/csmanufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202676081054d38e18bb33c5-55694810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5998ffbe3c3803d2ef1fcb165eaf7a63b22d148f' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/modules/csmanufacturer/csmanufacturer.tpl',
      1 => 1371713352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202676081054d38e18bb33c5-55694810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacs' => 0,
    'ps_manu_img_dir' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e18c1c003_59654766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e18c1c003_59654766')) {function content_54d38e18c1c003_59654766($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/kngo/workspace/suabotmeiji.com/tools/smarty/plugins/modifier.escape.php';
?><!-- CS Manufacturer module -->
<div class="manufacturerContainer">
	<div class="list_manufacturer responsive">
		<ul id="scroller">
		<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value){
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
			<?php if (file_exists((($_smarty_tpl->tpl_vars['ps_manu_img_dir']->value).($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'])).('.jpg'))){?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last']){?>last_item<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value['name'], 'htmlall', 'UTF-8');?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], 'htmlall', 'UTF-8');?>
.jpg" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value['name'], 'htmlall', 'UTF-8');?>
" /></a>
			</li>
			<?php }?>
		<?php } ?>
		</ul>
			<a id="prev_cs_manu" class="prev btn" href="#">&lt;</a>
			<a id="next_cs_manu" class="next btn" href="#">&gt;</a>
	</div>
</div>
<script type="text/javascript">
	$(window).load(function(){
		$("#scroller").carouFredSel({
			auto: false,
			responsive: true,
				width: '100%',
				height : 'variable',
				prev: '#prev_cs_manu',
				next: '#next_cs_manu',
				swipe: {
					onTouch : true
				},
				items: {
					width: 200,
					height : 'auto',
					visible: {
						min: 1,
						max: 6
					}
				},
				scroll: {
					items : 2 ,       //  The number of items scrolled.
					direction : 'left'
				}

		});
	});
</script>
<!-- /CS Manufacturer module -->

<?php }} ?>