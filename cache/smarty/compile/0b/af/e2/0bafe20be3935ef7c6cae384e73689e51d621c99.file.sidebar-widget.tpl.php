<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:23:05
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmsblogwidget/views/templates/hook/sidebar-widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2077123225586a7e690d8f90-70348421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bafe20be3935ef7c6cae384e73689e51d621c99' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmsblogwidget/views/templates/hook/sidebar-widget.tpl',
      1 => 1482999908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2077123225586a7e690d8f90-70348421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_setting' => 0,
    'popularpost' => 0,
    'post' => 0,
    'params' => 0,
    'image_baseurl' => 0,
    'show_view' => 0,
    'latestpost' => 0,
    'latestcomment' => 0,
    'comment' => 0,
    'category_menu' => 0,
    'archives' => 0,
    'archive' => 0,
    'aparams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e69199518_68542717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e69199518_68542717')) {function content_586a7e69199518_68542717($_smarty_tpl) {?>
<aside class="blog-widget widget-tabs">	
	<div role="tabpanel">		  
		 <ul class="nav nav-tabs">			
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>
			<li class="active"><a href="#popularpost" aria-controls="popularpost" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'jmsblogwidget'),$_smarty_tpl);?>
</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>
			<li <?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>class="active"<?php }?>><a href="#latestpost" aria-controls="latestpost" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Recent','mod'=>'jmsblogwidget'),$_smarty_tpl);?>
</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_LATESTCOMMENT']) {?>
			<li <?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']&&!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>class="active"<?php }?>><a href="#latestcomment" aria-controls="latestpost" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'jmsblogwidget'),$_smarty_tpl);?>
</a></li>
			<?php }?>
		  </ul>
		  <div class="tab-content">
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>
			<div class="tab-pane active" id="popularpost">				
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['popularpost']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['post']->key;
?>	
					<?php $_smarty_tpl->tpl_vars["show_view"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['views']+1, null, 0);?>	
					<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>
					<article class="item-post clearfix">
							<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
							<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
thumb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" />
							<?php } else { ?>	
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
no-img.jpg" class="img-responsive" />
							<?php }?>
							<h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h6>
							<p class="post-view"><i class="fa fa-eye"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_view']->value, ENT_QUOTES, 'UTF-8', true);?>
(<?php echo smartyTranslate(array('s'=>'Views','mod'=>'jmsblogwidget'),$_smarty_tpl);?>
)</p>
							</a>
					</article>
				<?php } ?>				
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>
			<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?> active<?php }?>" id="latestpost">				
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['latestpost']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['post']->key;
?>
					<?php $_smarty_tpl->tpl_vars["show_view"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['views']+1, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>
					<article class="item-post clearfix">
						<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
thumb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" />
						<?php } else { ?>	
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
no-img.jpg" class="img-responsive" />
						<?php }?>
						<h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h6>
						<p class="post-view"><i class="fa fa-eye"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_view']->value, ENT_QUOTES, 'UTF-8', true);?>
(<?php echo smartyTranslate(array('s'=>'Views','mod'=>'jmsblogwidget'),$_smarty_tpl);?>
)</p>
						</a>
					</article>
				<?php } ?>				
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_LATESTCOMMENT']) {?>
			<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']&&!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?> active<?php }?>" id="latestcomment">
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['latestcomment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['comment']->key;
?>
					<article class="comment-item">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
user.png" class="img-responsive">
						<h6><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
:</h6>
						<p><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p>
					</article>
				<?php } ?>	
			</div>
			<?php }?>
		  </div>

	</div>
</aside>
<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_CATEGORYMENU']) {?>
<aside class="blog-widget widget-categories">
	<h3 class="widget-title"><span><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
</span></h3>
	<ul>
	<?php echo $_smarty_tpl->tpl_vars['category_menu']->value;?>

	</ul>
</aside>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_ARCHIVES']) {?>
<aside class="blog-widget widget-archives">
	<h3 class="widget-title"><span><?php echo smartyTranslate(array('s'=>'Archives'),$_smarty_tpl);?>
</span></h3>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['archive'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['archive']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archives']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['archive']->key => $_smarty_tpl->tpl_vars['archive']->value) {
$_smarty_tpl->tpl_vars['archive']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['aparams'] = new Smarty_variable(array('archive'=>$_smarty_tpl->tpl_vars['archive']->value['postmonth']), null, 0);?>
		<li><a href="<?php echo jmsblog::getPageLink('jmsblog-archive',$_smarty_tpl->tpl_vars['aparams']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['archive']->value['postmonth'];?>
</a></li>
	<?php } ?>
	</ul>
</aside>
<?php }?>
<?php }} ?>
