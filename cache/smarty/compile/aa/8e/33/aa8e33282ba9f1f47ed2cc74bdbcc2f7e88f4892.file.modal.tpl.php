<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:20
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:609487409586a7a0409fb76-16383760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8e33282ba9f1f47ed2cc74bdbcc2f7e88f4892' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1482862877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '609487409586a7a0409fb76-16383760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a040a31e5_22863328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a040a31e5_22863328')) {function content_586a7a040a31e5_22863328($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
