<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 16:23:50
         compiled from "/home/admiraltza/www/modules/jmsvermegamenu/views/templates/admin/jmsvermegamenu_manager/menuconfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:657633167586d1386dc9de5-97286123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba32a672c8f4977a47f368f61f579a93ec0ab5b4' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsvermegamenu/views/templates/admin/jmsvermegamenu_manager/menuconfig.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '657633167586d1386dc9de5-97286123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'JMSVMM_MOUSEEVENT' => 0,
    'JMSVMM_DURATION' => 0,
    'JMSVMM_LOADBOOTSTRAPCSS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586d1386df00d5_68834644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d1386df00d5_68834644')) {function content_586d1386df00d5_68834644($_smarty_tpl) {?>
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsvermegamenu" method="post">
<div class="menu-config">
<h3>Menu Configuration</h3>
<ul>
    <li>
		<label data-placement="top" data-original-title="Mouse Event Trigger" class="label-tooltip">Menu Trigger</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value=='hover') {?>checked="checked"<?php }?> value="hover" id="mouseevent_on" name="JMSVMM_MOUSEEVENT">
			<label for="mouseevent_on">Hover</label>
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value=='click') {?>checked="checked"<?php }?> value="click" id="mouseevent_off" name="JMSVMM_MOUSEEVENT">
			<label for="mouseevent_off">Click</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Time for open and close dropdown(milisecond)" class="label-tooltip"> Duration</label>	
		<fieldset class="btn-group">
		<input type="text" name="JMSVMM_DURATION" value="<?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
" id="open-speed" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Load Bootstrap Css File" class="label-tooltip">Load Bootstrap Css</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_LOADBOOTSTRAPCSS']->value==1) {?>checked="checked"<?php }?> value="1" id="loadbootstrap_on" name="JMSVMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_on">Yes</label>
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_LOADBOOTSTRAPCSS']->value==0) {?>checked="checked"<?php }?> value="0" id="loadbootstrap_off" name="JMSVMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>			
<ul>
    <li>
		<label>&nbsp;</label>	
		<fieldset class="btn-group">
		<button class="btn btn-success" name="submitConfig" id="btn-save-config" value="1" type="submit">
			Save Config
		</button>		
		</fieldset>
	</li>
</ul>
			
</div>
</form><?php }} ?>
