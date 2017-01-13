<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:20:47
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1366022450586a7ddfcb29a2-96323471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066d79a3556968cc893fc4d3cc6d766aa9f1c18d' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1482862876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366022450586a7ddfcb29a2-96323471',
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
  'unifunc' => 'content_586a7ddfcbdce1_64072096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7ddfcbdce1_64072096')) {function content_586a7ddfcbdce1_64072096($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
