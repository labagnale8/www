<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 04:59:34
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmsblog/views/templates/front/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143133243658745c26470985-26865255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9400e25465c11748152a4f32d9ab1606a16e3854' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmsblog/views/templates/front/categories.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143133243658745c26470985-26865255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'jmsblog_setting' => 0,
    'image_baseurl' => 0,
    'catparams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58745c264f8088_24779814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58745c264f8088_24779814')) {function content_58745c264f8088_24779814($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h3 class="title-blog"><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
</h3>
<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value) {?>		
	<div class="categories-list row">
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>			
			<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['category']->value['alias']), null, 0);?>				
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="blog-category">
					<?php if ($_smarty_tpl->tpl_vars['category']->value['image']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
						<div class="post-thumb">
							<a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
thumb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" /></a>			 		
						</div>
					<?php }?>
					<div class="category-info">
						<h4 class="post-title"><a href="<?php echo jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h4>	
						<div class="blog-intro"><?php echo $_smarty_tpl->tpl_vars['category']->value['introtext'];?>
</div>
					</div>			
				</div>
			</div>	
		<?php } ?>
	</div>
<?php } else { ?>	
<?php echo smartyTranslate(array('s'=>'Sorry, dont have any category in this section','mod'=>'jmsblog'),$_smarty_tpl);?>

<?php }?>


<?php }} ?>
