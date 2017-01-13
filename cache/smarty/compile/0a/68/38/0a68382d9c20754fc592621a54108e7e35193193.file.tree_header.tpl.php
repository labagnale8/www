<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:21:46
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:564037030586a7e1a4d44d1-42982496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a68382d9c20754fc592621a54108e7e35193193' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1482862883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '564037030586a7e1a4d44d1-42982496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e1a4df558_98945403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e1a4df558_98945403')) {function content_586a7e1a4df558_98945403($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
