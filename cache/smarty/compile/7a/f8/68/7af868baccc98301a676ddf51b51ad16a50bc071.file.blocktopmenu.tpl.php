<?php /* Smarty version Smarty-3.1.14, created on 2015-02-05 10:36:55
         compiled from "/home/kngo/workspace/suabotmeiji.com/themes/gomarket/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56550636554d38e17916fc3-54523036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af868baccc98301a676ddf51b51ad16a50bc071' => 
    array (
      0 => '/home/kngo/workspace/suabotmeiji.com/themes/gomarket/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1374053744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56550636554d38e17916fc3-54523036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d38e17946050_85154988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d38e17946050_85154988')) {function content_54d38e17946050_85154988($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/kngo/workspace/suabotmeiji.com/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	
	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix" id="menu_parent">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
	<script>$('ul#menu_parent > li').last().addClass("last");$('ul#menu_parent > li').first().addClass("first");</script>
<?php }?><?php }} ?>