<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 03:13:50
         compiled from "/home/admiraltza/www/themes/jms_delphinus/supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1000370366586c5a5e74c8a6-77849644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978872100d86d2b334030df4823f17e216faf78e' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/supplier.tpl',
      1 => 1482999907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1000370366586c5a5e74c8a6-77849644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'supplier' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586c5a5e7c3b52_68471598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c5a5e7c3b52_68471598')) {function content_586c5a5e7c3b52_68471598($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<h1 class="page-heading product-listing">
		<?php echo smartyTranslate(array('s'=>'List of products by supplier:'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->name, ENT_QUOTES, 'UTF-8', true);?>

	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['supplier']->value->description)) {?>
		<div class="description_box rte">
			<p><?php echo $_smarty_tpl->tpl_vars['supplier']->value->description;?>
</p>
		</div>
	<?php }?>

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
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this supplier.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>
