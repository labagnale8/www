<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:21:49
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonsliderlayer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1598803469586a7e1d660621-39588568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d4b8de22554617a4b0304e8447339352840816' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonsliderlayer.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1598803469586a7e1d660621-39588568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
    'image_url' => 0,
    'layer' => 0,
    'configs' => 0,
    'vimeo_link' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'pausehover' => 0,
    'max_width' => 0,
    'max_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e1d7d3312_67522822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e1d7d3312_67522822')) {function content_586a7e1d7d3312_67522822($_smarty_tpl) {?>
<div class="jms-slider-wrapper">
	<div class="responisve-container">
		<div class="slider" >
		<div class="fs_loader"></div>
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
			<div class="slide <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['class_suffix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="background:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['bg_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 url(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
slides/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['bg_image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
) no-repeat left top;background-size:cover;" <?php if ($_smarty_tpl->tpl_vars['slide']->value['slide_link']) {?>onclick="document.location='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['slide_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';"<?php }?>>
				<?php  $_smarty_tpl->tpl_vars['layer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value['layers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->key => $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type']=='text') {?>
					<div class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 jms-slide-content" 
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed']) {?>data-fixed<?php }?> 
					data-position="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_y'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_x'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-fontsize = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_font_size'], ENT_QUOTES, 'UTF-8', true);?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_line_height']) {?>
					data-lineheight = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_line_height'], ENT_QUOTES, 'UTF-8', true);?>
px"
					<?php }?>
					data-in="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_in'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-out="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_out'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-delay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_delay'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-ease-in="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-ease-out="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_step'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-special="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_special'], ENT_QUOTES, 'UTF-8', true);?>
"
					data-time = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_time'], ENT_QUOTES, 'UTF-8', true);?>
"
					style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_font_size'], ENT_QUOTES, 'UTF-8', true);?>
px; font-style:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_style'], ENT_QUOTES, 'UTF-8', true);?>
; color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_color'], ENT_QUOTES, 'UTF-8', true);?>
; line-height:<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_line_height']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_line_height'], ENT_QUOTES, 'UTF-8', true);?>
px<?php }?>;"					
					><?php echo $_smarty_tpl->tpl_vars['layer']->value['data_html'];?>

					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['data_type']=='image') {?>					
					<img class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 jms-slide-content" 
					src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
layers/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed']) {?>data-fixed<?php }?> 
					data-position="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_y'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_x'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-in="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_in'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-out="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_out'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-delay="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_delay'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-ease-in="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-ease-out="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-time = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					data-step="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_step'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-special="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_special'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="Joommasters.com" />
					<?php } else { ?>
						
					<iframe class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 jms-slide-content"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed']||$_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>data-fixed<?php }?> 
					data-position="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_y'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_x'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-in="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_in'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-out="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_out'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>data-delay="0"<?php } else { ?>data-delay="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_delay'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php }?>
					data-ease-in="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-ease-out="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'], ENT_QUOTES, 'UTF-8', true);?>
" 
					data-step="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_step'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-special="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_special'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					data-time = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>
						width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_WIDTH'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
						height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_HEIGHT'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					<?php } else { ?>
						width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
						height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['videotype']=='youtube') {?>
						src="http://www.youtube.com/embed/<?php echo substr($_smarty_tpl->tpl_vars['layer']->value['data_video'],(strpos($_smarty_tpl->tpl_vars['layer']->value['data_video'],'?v=')+3));?>
?autoplay=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&controls=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_video_controls'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&loop=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_video_loop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['videotype']=='vimeo') {?>
						 <?php $_smarty_tpl->tpl_vars['vimeo_link'] = new Smarty_variable((explode("/",$_smarty_tpl->tpl_vars['layer']->value['data_video'])), null, 0);?>
						src="https://player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['vimeo_link']->value[count($_smarty_tpl->tpl_vars['vimeo_link']->value)-1];?>
?autoplay=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&loop=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['data_video_loop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					<?php }?>	
					allowfullscreen 
					frameborder="0">
					</iframe> 
					<?php }?>
				<?php } ?>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

  
<script type="text/javascript">
	$(window).load(function(){
		$('.slider').fractionSlider({	
			'slideTransition' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS'], ENT_QUOTES, 'UTF-8', true);?>
",
			'slideEndAnimation' : <?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_END_ANIMATE']) {?>true<?php } else { ?>false<?php }?>,
			'transitionIn' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS_IN'], ENT_QUOTES, 'UTF-8', true);?>
",
			'transitionOut' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS_OUT'], ENT_QUOTES, 'UTF-8', true);?>
",
			'fullWidth' : <?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_FULL_WIDTH']) {?>true<?php } else { ?>false<?php }?>,
			'delay' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_DELAY'], ENT_QUOTES, 'UTF-8', true);?>
,
			'timeout' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_DURATION'], ENT_QUOTES, 'UTF-8', true);?>
,
			'speedIn' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_SPEED_IN'], ENT_QUOTES, 'UTF-8', true);?>
,
			'speedOut' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_SPEED_OUT'], ENT_QUOTES, 'UTF-8', true);?>
,
			'easeIn' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_EASE_IN'], ENT_QUOTES, 'UTF-8', true);?>
",
			'easeOut' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_EASE_OUT'], ENT_QUOTES, 'UTF-8', true);?>
",
			'controls' : <?php if ($_smarty_tpl->tpl_vars['navigation']->value=='1') {?>true<?php } else { ?>false<?php }?>,
			'pager' : <?php if ($_smarty_tpl->tpl_vars['pagination']->value=='1') {?>true<?php } else { ?>false<?php }?>,
			'autoChange' : <?php if ($_smarty_tpl->tpl_vars['autoplay']->value=='1') {?>true<?php } else { ?>false<?php }?>,
			'pauseOnHover' : <?php if ($_smarty_tpl->tpl_vars['pausehover']->value=='1') {?>true<?php } else { ?>false<?php }?>,
			'backgroundAnimation' : <?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_BG_ANIMATE']) {?>true<?php } else { ?>false<?php }?>,
			'backgroundEase' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_BG_EASE'], ENT_QUOTES, 'UTF-8', true);?>
",
			'responsive' : <?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_RESPONSIVE']) {?>true<?php } else { ?>false<?php }?>,
			'dimensions' : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_width']->value, ENT_QUOTES, 'UTF-8', true);?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_height']->value, ENT_QUOTES, 'UTF-8', true);?>
",
		});
	});
</script><?php }} ?>
