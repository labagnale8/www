<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:26:16
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmsblog/views/templates/front/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144869226586a8d38319943-79882245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40d1c0916d991c22f85da5576f194a44151d1f0' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmsblog/views/templates/front/post.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144869226586a8d38319943-79882245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'jmsblog_setting' => 0,
    'catparams' => 0,
    'comments' => 0,
    'image_baseurl' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8d383b7690_30173974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8d383b7690_30173974')) {function content_586a8d383b7690_30173974($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admiraltza/www/tools/smarty/plugins/modifier.date_format.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h3 class="title-blog"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
<div class="blog-post">
	<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']), null, 0);?>	
	<ul class="post-meta">
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
		<li class="post-category"><span><?php echo smartyTranslate(array('s'=>'Category','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <a href="<?php echo jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php }?>
		<li class="post-created"><span><?php echo smartyTranslate(array('s'=>'Created','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['created'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%B %e, %Y");?>
</li>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
		<li class="post-views"><span><?php echo smartyTranslate(array('s'=>'Views','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['views'], ENT_QUOTES, 'UTF-8', true);?>
</li>		
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
		<li class="post-comment-count"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <a title="Comment on <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" href="#comments"> <?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
</a></li>
		<?php }?>
	</ul>		
	<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
		<div class="post-video">
		<?php echo $_smarty_tpl->tpl_vars['post']->value['link_video'];?>

		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
		<div class="post-image">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	<?php }?>
	<div class="post-fulltext">
		<?php echo $_smarty_tpl->tpl_vars['post']->value['fulltext'];?>
	
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_SOCIAL_SHARING']) {?>
<div class="social-sharing">

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<span class='st_sharethis_large' displayText='ShareThis'></span>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_FACEBOOK']) {?>
<span class='st_facebook_large' displayText='Facebook'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_TWITTER']) {?>
<span class='st_twitter_large' displayText='Tweet'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_GOOGLEPLUS']) {?>
<span class='st_googleplus_large' displayText='Google +'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_LINKEDIN']) {?>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_PINTEREST']) {?>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_EMAIL']) {?>
<span class='st_email_large' displayText='Email'></span>
<?php }?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_COMMENT_ENABLE']) {?>	
<div id="comments">
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_FACEBOOK_COMMENT']==0) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_dir']->value)."comment_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_dir']->value)."comment_facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
<?php }?>
</div>
<?php }?>
<?php }} ?>
