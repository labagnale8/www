<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:15:44
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659846776586a7cb02eb489-55178163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625085cc5642942fb7e6fff346b155cabdaa9f28' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1482862857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659846776586a7cb02eb489-55178163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7cb02f6791_81648289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7cb02f6791_81648289')) {function content_586a7cb02f6791_81648289($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
