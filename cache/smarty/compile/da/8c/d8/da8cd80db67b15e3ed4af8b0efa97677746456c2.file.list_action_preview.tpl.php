<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:20:42
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088882366586a7ddaad3c44-07209045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8cd80db67b15e3ed4af8b0efa97677746456c2' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1482862876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088882366586a7ddaad3c44-07209045',
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
  'unifunc' => 'content_586a7ddaadb304_34003130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7ddaadb304_34003130')) {function content_586a7ddaadb304_34003130($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
