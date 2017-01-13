<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 16:55:32
         compiled from "/home/admiraltza/www/modules/jmstestimonials/views/templates/hook/jmstestimonialslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:432917170586d1af4b85232-84207152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7da89e43615be17e4460350309519dc644091b0e' => 
    array (
      0 => '/home/admiraltza/www/modules/jmstestimonials/views/templates/hook/jmstestimonialslist.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '432917170586d1af4b85232-84207152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'Testimonials' => 0,
    'Testimonial' => 0,
    'image_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586d1af4bc7581_89699356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d1af4bc7581_89699356')) {function content_586d1af4bc7581_89699356($_smarty_tpl) {?>
<div class="panel">
	<h3><i class="icon-list-ul"></i> 
		<?php echo smartyTranslate(array('s'=>'Product list','mod'=>'jmstestimonials'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmstestimonials&addTes=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
		</span>
	</h3>
	<script>
			$(document).ready(function(){									
				$('.toogle').click(function(e){
					$('#slidesContent').toggle(200);
				});
				$('.panel-heading').click(function(e){
					$(this).next('.form-wrapper').toggle(200);
				});
			});
				
	</script>
	<div id="slidesContent">
		<div id="slides">
			<?php  $_smarty_tpl->tpl_vars['Testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Testimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Testimonial']->key => $_smarty_tpl->tpl_vars['Testimonial']->value) {
$_smarty_tpl->tpl_vars['Testimonial']->_loop = true;
?>
			
			
				<div id="slides_1" class="panel slideContent_">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
						
							<?php if ($_smarty_tpl->tpl_vars['Testimonial']->value['image']) {?>
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Testimonial']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Testimonial']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-thumbnail" />
							<?php }?>
						</div>
						<div class="col-md-8">
							<h4 class="pull-left"> #<?php echo $_smarty_tpl->tpl_vars['Testimonial']->value['id_testimonial'];?>
- <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Testimonial']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</h4>							
							<div class="btn-group-action pull-right">								
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['Testimonial']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmstestimonials&changeStatus&status_id_testimonial=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Testimonial']->value['id_testimonial'], ENT_QUOTES, 'UTF-8', true);?>
" title="title="<?php if ($_smarty_tpl->tpl_vars['Testimonial']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>"">
									<i class="<?php if ($_smarty_tpl->tpl_vars['Testimonial']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['Testimonial']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmstestimonials&id_testimonial=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Testimonial']->value['id_testimonial'], ENT_QUOTES, 'UTF-8', true);?>
"
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'jmstestimonials'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmstestimonials&delete_id_tes=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Testimonial']->value['id_testimonial'], ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'jmstestimonials'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>
