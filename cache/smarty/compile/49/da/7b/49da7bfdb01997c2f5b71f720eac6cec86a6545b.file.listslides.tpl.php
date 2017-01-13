<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 16:29:48
         compiled from "/home/admiraltza/www/modules/jmsslider/views/templates/hook/listslides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1838330391586d14eca1f210-04282894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49da7bfdb01997c2f5b71f720eac6cec86a6545b' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsslider/views/templates/hook/listslides.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1838330391586d14eca1f210-04282894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root_url' => 0,
    'link' => 0,
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586d14eca8ed06_91591362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d14eca8ed06_91591362')) {function content_586d14eca8ed06_91591362($_smarty_tpl) {?>
<script type="text/javascript">
            $(function() {
                var $mySlides = $("#slides");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering";                     
                        $.post("<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/ajax_jmsslider.php?" + order);
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
</script>			
<div class="panel">
	<h3>
	<span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
		<i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Slides list','mod'=>'jmsslider'),$_smarty_tpl);?>

	</span>
	
	<span class="panel-heading-action">
		<a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsslider&addSlide=1" class="btn btn-default btn-success" id="addSlide" title="<?php echo smartyTranslate(array('s'=>'Add Slide','mod'=>'jmsslider'),$_smarty_tpl);?>
">
			<i class="icon-plus"></i>
		</a>
		
	</span>
	</h3>
	<script>
	$(document).ready(function(){
		$('.toogle').click(function(e){
			$('#slidesContent').toggle(200);
		});				
	});
				
	</script>
	<div id="slidesContent">
		<div id="slides">
			<?php if (count($_smarty_tpl->tpl_vars['slides']->value)>0) {?>
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
			<div id="slides_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true);?>
" class="panel">
				<div class="row">
					<div class="col-lg-1">
						<span><i class="icon-arrows "></i></span>
					</div>
					<div class="col-md-2">
						#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

					</div>
					<div class="col-md-2">
						<?php if ($_smarty_tpl->tpl_vars['slide']->value['iso_lang']) {?>
						<strong><?php echo smartyTranslate(array('s'=>'Language','mod'=>'jmsslider'),$_smarty_tpl);?>
</strong> : <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['iso_lang'], ENT_QUOTES, 'UTF-8', true);?>
</i>
						<?php } else { ?>
						<i><?php echo smartyTranslate(array('s'=>'All Language','mod'=>'jmsslider'),$_smarty_tpl);?>
</i>
						<?php }?>
					</div>					
					<div class="col-md-2">
						<div class="btn-group-action pull-right">
							<a class="btn btn-default"
								href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsslider&layers=1&id_slide=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true);?>
">
								<i class="icon-edit"></i>
								<?php echo smartyTranslate(array('s'=>'Layers Manager','mod'=>'jmsslider'),$_smarty_tpl);?>

							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="btn-group-action pull-right">
							
							<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsslider&copySlide=1&id_slide=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true);?>
">
								<i class="icon-copy"></i>
								<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'jmsslider'),$_smarty_tpl);?>

							</a>
							<a class="btn <?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
								href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsslider&changeStatus&id_slide=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['slide']->value['status']) {?>Enabled<?php } else { ?>Disabled<?php }?>
							</a>
							<a class="btn btn-default"
								href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsslider&editSlide=1&id_slide=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true);?>
">
								<i class="icon-edit"></i>
								<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'jmsslider'),$_smarty_tpl);?>

							</a>
							<a class="btn btn-default" onclick="if(confirm('Are you sure want to remove this slide?')) { document.location='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsslider&delete_id_slide=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'; } else { return true;}"
								>
								<i class="icon-trash"></i>
								<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'jmsslider'),$_smarty_tpl);?>

							</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'There is no slide','mod'=>'jmsslider'),$_smarty_tpl);?>

			<?php }?>
		</div>
	</div>
</div><?php }} ?>
