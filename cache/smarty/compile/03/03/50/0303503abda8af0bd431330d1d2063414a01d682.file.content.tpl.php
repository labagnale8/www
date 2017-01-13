<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:19
         compiled from "/home/admiraltza/www/admin72364ma6i/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1606419108586a7a03ebf3e9-75806194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0303503abda8af0bd431330d1d2063414a01d682' => 
    array (
      0 => '/home/admiraltza/www/admin72364ma6i/themes/default/template/content.tpl',
      1 => 1482862426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1606419108586a7a03ebf3e9-75806194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a03ec6552_41874097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a03ec6552_41874097')) {function content_586a7a03ec6552_41874097($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
