<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:26
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:582941703586a7a0a845d51-56224352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3002ebfdffe0f8c3228d6f4b898e81e68617b0c3' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonbanner.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582941703586a7a0a845d51-56224352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'box_class' => 0,
    'banner' => 0,
    'banner_link' => 0,
    'target' => 0,
    'root_url' => 0,
    'alt_text' => 0,
    'html_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0a85e3d6_32442281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0a85e3d6_32442281')) {function content_586a7a0a85e3d6_32442281($_smarty_tpl) {?>
<div class="jms-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['box_class']->value;?>
<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>
	<a href="<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {?><?php echo $_smarty_tpl->tpl_vars['banner_link']->value;?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"<?php }?>>
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root_url']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['alt_text']->value;?>
" />
	</a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

<?php }?>
</div>	
<?php }} ?>
