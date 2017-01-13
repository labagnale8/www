<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 21:27:58
         compiled from "/home/admiraltza/www/themes/jms_delphinus/new-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819136912586c094e104fe5-06610420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241b241f6d93b2551f378fd54c53128c45c6228a' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/new-products.tpl',
      1 => 1482999907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819136912586c094e104fe5-06610420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586c094e145997_77183173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c094e145997_77183173')) {function content_586c094e145997_77183173($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading product-listing"><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<div class="filters-panel">
		<div class="row">
			<div class="col-md-4 col-lg-4 hidden-sm hidden-xs view-modes pull-left">
				<a class="view-grid" href="#"><span class="fa fa-th"></span>&nbsp;<label><?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
</label></a><a class="view-list" href="#"><span class="fa fa-list"></span>&nbsp;<label><?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
</label></a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 sort-select pull-right">
				<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
				
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


	<div class="filters-panel-bottom">
		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php } else { ?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No new products.'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>
