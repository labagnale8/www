<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:21:49
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/jmspagebuilder_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:854947184586a7e1dabd089-70127787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc848939c2d397a1214fe820a138b7576a77a159' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/jmspagebuilder_body.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '854947184586a7e1dabd089-70127787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'root_url' => 0,
    'column' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e1db4faa5_55918587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e1db4faa5_55918587')) {function content_586a7e1db4faa5_55918587($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="jms-row<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->custom_class)&&$_smarty_tpl->tpl_vars['row']->value->settings->custom_class) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->settings->custom_class, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>style="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>background-image:url('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['root_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->settings->background_img, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');<?php }?><?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_size)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_size) {?>background-size:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->settings->background_size, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) {?>background-attachment:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_position)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_position) {?>background-position:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->settings->background_position, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php }?>"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid)&&$_smarty_tpl->tpl_vars['row']->value->settings->fluid=='0') {?><div class="container"><?php }?>
		<div class="row">
		<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_smarty_tpl->tpl_vars['cindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value->cols; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['cindex']->value = $_smarty_tpl->tpl_vars['column']->key;
?>
			<div class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->className, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->custom_class)&&$_smarty_tpl->tpl_vars['column']->value->settings->custom_class) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->settings->custom_class, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" style="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_img)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_img) {?>background-image:url('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['root_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->settings->background_img, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');<?php }?><?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_size)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_size) {?>background-size:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->settings->background_size, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_attachment) {?>background-attachment:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_position)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_position) {?>background-position:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->settings->background_position, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['aindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['column']->value->addons; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['aindex']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
					<div class="addon-box">
						<?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value)&&$_smarty_tpl->tpl_vars['addon']->value->return_value) {?><?php echo $_smarty_tpl->tpl_vars['addon']->value->return_value;?>
<?php }?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid)&&$_smarty_tpl->tpl_vars['row']->value->settings->fluid=='0') {?></div><?php }?>
	</div>
<?php } ?>
<?php }} ?>
