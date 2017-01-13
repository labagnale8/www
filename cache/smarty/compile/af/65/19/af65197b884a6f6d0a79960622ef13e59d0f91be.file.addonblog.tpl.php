<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:21:49
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonblog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1263777932586a7e1d9b5e78-88214111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af65197b884a6f6d0a79960622ef13e59d0f91be' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmspagebuilder/views/templates/hook/addonblog.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1263777932586a7e1d9b5e78-88214111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items_show' => 0,
    'items_show_md' => 0,
    'items_show_sm' => 0,
    'items_show_xs' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'rewind' => 0,
    'slidebypage' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'posts' => 0,
    'post' => 0,
    'show_media' => 0,
    'params' => 0,
    'image_url' => 0,
    'show_category' => 0,
    'catparams' => 0,
    'show_time' => 0,
    'show_nviews' => 0,
    'show_ncomments' => 0,
    'show_introtext' => 0,
    'show_readmore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e1da59109_33228793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e1da59109_33228793')) {function content_586a7e1da59109_33228793($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/admiraltza/www/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/admiraltza/www/tools/smarty/plugins/modifier.date_format.php';
?>
<script type="text/javascript">
jQuery(function ($) {
    "use strict";
	var blogCarousel = $(".blog-carousel");		
	var items = 3,
	    itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['items_show']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>3<?php }?>,
	    itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['items_show_md']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>2<?php }?>,
	    itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['items_show_sm']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>2<?php }?>,
	    itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['items_show_xs']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>1<?php }?>;
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	blogCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:itemsDesktop
			},
			991:{
				items:itemsDesktopSmall
			},
			768:{
				items:itemsTablet
			},
			318:{
				items:itemsMobile
			}
		},
		rtl: rtl,
		margin: 30,
	    nav: <?php if ($_smarty_tpl->tpl_vars['navigation']->value=='1') {?>true<?php } else { ?>false<?php }?>,
	    dots: <?php if ($_smarty_tpl->tpl_vars['pagination']->value=='1') {?>true<?php } else { ?>false<?php }?>,
		autoplay:<?php if ($_smarty_tpl->tpl_vars['autoplay']->value=='1') {?>true<?php } else { ?>false<?php }?>,
	    rewindNav: <?php if ($_smarty_tpl->tpl_vars['rewind']->value=='1') {?>true<?php } else { ?>false<?php }?>,
	    navigationText: ["", ""],
	    slideBy: <?php if ($_smarty_tpl->tpl_vars['slidebypage']->value=='1') {?>'page'<?php } else { ?>1<?php }?>,
	    slideSpeed: 200	
	});
});
</script>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['addon_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['addon_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['posts']->value)>0) {?>
<div class="blog-carousel">	
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>				
		<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']), null, 0);?>	
		<div class="blog-item">
			<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video']&&($_smarty_tpl->tpl_vars['show_media']->value=='1')) {?>
			<div class="post-thumb">
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

			</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image']&&($_smarty_tpl->tpl_vars['show_media']->value=='1')) {?>
			<div class="post-thumb">
				<a href="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8', true);?>
thumb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" /></a>			 		
			</div>
			<?php }?>	
			<h4 class="post-title"><a href="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h4>
			<ul class="post-meta">
				<?php if ($_smarty_tpl->tpl_vars['show_category']->value=='1') {?>
				<li class="post-category"><span><?php echo smartyTranslate(array('s'=>'Category','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
 :</span> <a href="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
				<?php }?>				
				<?php if ($_smarty_tpl->tpl_vars['show_time']->value=='1') {?>						
				<li class="post-created"><span><?php echo smartyTranslate(array('s'=>'Created','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
 :</span> <?php echo smarty_modifier_date_format(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['created'], ENT_QUOTES, 'UTF-8', true),"%B %e, %Y");?>
</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['show_nviews']->value=='1') {?>		
				<li class="post-views"><span><?php echo smartyTranslate(array('s'=>'Views','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
 :</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['views'], ENT_QUOTES, 'UTF-8', true);?>
</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['show_ncomments']->value=='1') {?>		
				<li class="post-comments"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['comment_count'], ENT_QUOTES, 'UTF-8', true);?>
 <span><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
 :</span> </li>
				<?php }?>	
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['show_introtext']->value=='1') {?>	
			<div class="post-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>	
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['show_readmore']->value=='1') {?>	
				<a href="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
" class="post-readmore"><?php echo smartyTranslate(array('s'=>'read more','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
 ...</a>	
			<?php }?>
		</div>	
	<?php } ?>	
</div>	
<?php }?>	<?php }} ?>
