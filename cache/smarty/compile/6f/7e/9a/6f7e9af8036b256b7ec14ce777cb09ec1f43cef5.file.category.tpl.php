<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:23:05
         compiled from "/home/admiraltza/www/themes/jms_delphinus/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165471978586a7e6924adb8-59278070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7e9af8036b256b7ec14ce777cb09ec1f43cef5' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/category.tpl',
      1 => 1482999907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165471978586a7e6924adb8-59278070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e692649e7_76311620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e692649e7_76311620')) {function content_586a7e692649e7_76311620($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>					
		<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="filters-panel">
			<div class="row">
				<div class="sort-select col-lg-6 col-md-6 col-sm-7 col-xs-8">
					<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
				
				</div>
				<div class="view-modes col-lg-6 col-md-6 col-sm-5 col-xs-4">
					<a class="view-grid" href="#">
						<span class="fa fa-th"></span>
					</a>
					<a class="view-list" href="#">
						<span class="fa fa-list"></span>
					</a>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

		<div class="filters-panel-bottom">
			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
		<div class="alert alert-warning"><button data-dismiss="alert" type="button" class="close">X</button><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?>
<?php }} ?>
