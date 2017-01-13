<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:07:26
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2034793892586a7abec8c194-05321966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5be1395b9cbcad880be6039c95177e8e44b54ec9' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1482862875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034793892586a7abec8c194-05321966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7abecc2e82_48788610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7abecc2e82_48788610')) {function content_586a7abecc2e82_48788610($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
