<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:26
         compiled from "/home/admiraltza/www/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:918765343586a7a0a7e40a6-61989242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21817916cb743a2666253144f3a17ccb39cfec2a' => 
    array (
      0 => '/home/admiraltza/www/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl',
      1 => 1482999912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '918765343586a7a0a7e40a6-61989242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'html_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0a7f15d1_62244128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0a7f15d1_62244128')) {function content_586a7a0a7f15d1_62244128($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['addon_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['addon_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>
<?php }} ?>
