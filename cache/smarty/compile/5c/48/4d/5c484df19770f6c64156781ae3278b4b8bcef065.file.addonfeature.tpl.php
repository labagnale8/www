<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:21:49
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonfeature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1877346944586a7e1da7f8f3-88744042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c484df19770f6c64156781ae3278b4b8bcef065' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonfeature.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877346944586a7e1da7f8f3-88744042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'box_class' => 0,
    'text_align' => 0,
    'image_type' => 0,
    'image' => 0,
    'root_url' => 0,
    'alt_text' => 0,
    'icon_class' => 0,
    'title' => 0,
    'html_content' => 0,
    'button_text' => 0,
    'button_link' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e1daa76f7_55795650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e1daa76f7_55795650')) {function content_586a7e1daa76f7_55795650($_smarty_tpl) {?>
<div class="feature-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['box_class']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['text_align']->value) {?>style="text-align:<?php echo $_smarty_tpl->tpl_vars['text_align']->value;?>
;"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['image_type']->value=='image'&&$_smarty_tpl->tpl_vars['image']->value) {?>	
	<div class="image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root_url']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['alt_text']->value;?>
" /></div>
<?php } elseif ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
	<i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>	
<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
<a href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {?><?php echo $_smarty_tpl->tpl_vars['button_link']->value;?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
</a>
<?php }?>
</div>	
<?php }} ?>
