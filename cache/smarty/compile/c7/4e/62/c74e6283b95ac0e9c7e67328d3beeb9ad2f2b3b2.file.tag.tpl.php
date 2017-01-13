<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:26:31
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmsblog/views/templates/front/tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1154110588586a8d47a4a3a3-84580153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c74e6283b95ac0e9c7e67328d3beeb9ad2f2b3b2' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmsblog/views/templates/front/tag.tpl',
      1 => 1482999909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1154110588586a8d47a4a3a3-84580153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag' => 0,
    'posts' => 0,
    'post' => 0,
    'params' => 0,
    'jmsblog_setting' => 0,
    'catparams' => 0,
    'image_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8d47ae3042_45692812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8d47ae3042_45692812')) {function content_586a8d47ae3042_45692812($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admiraltza/www/tools/smarty/plugins/modifier.date_format.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h3 class="title-blog"><?php echo smartyTranslate(array('s'=>'Tag','mod'=>'jmsblog'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</h3>
<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&$_smarty_tpl->tpl_vars['posts']->value) {?>		
	<div class="post-list">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>			
			<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']), null, 0);?>
			<article class="blog-post">
				<h4 class="post-title"><a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h4>
				<ul class="post-meta">
					<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
					<li class="post-category"><span><?php echo smartyTranslate(array('s'=>'Category','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <a href="<?php echo jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<?php }?>					
					<li class="post-created"><span><?php echo smartyTranslate(array('s'=>'Created','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <?php echo smarty_modifier_date_format(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['created'], ENT_QUOTES, 'UTF-8', true),"%B %e, %Y");?>
</li>
					<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
					<li class="post-views"><span><?php echo smartyTranslate(array('s'=>'Views','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['views'], ENT_QUOTES, 'UTF-8', true);?>
</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
					<li class="post-comments"><span><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'jmsblog'),$_smarty_tpl);?>
 :</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['comment_count'], ENT_QUOTES, 'UTF-8', true);?>
</li>
					<?php }?>	
				</ul>									
				<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
					<div class="post-thumb">
					<?php echo $_smarty_tpl->tpl_vars['post']->value['link_video'];?>

					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
					<div class="post-thumb">
						<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" /></a>			 		
					</div>
				<?php }?>				
				<div class="blog-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>				
				<a class="btn btn-default blog-readmore" href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'jmsblog'),$_smarty_tpl);?>
 ...</a>
			</article>			
		<?php } ?>
	</div>
<?php } else { ?>	
<?php echo smartyTranslate(array('s'=>'Sorry, dont have any post in this category','mod'=>'jmsblog'),$_smarty_tpl);?>

<?php }?>


<?php }} ?>
