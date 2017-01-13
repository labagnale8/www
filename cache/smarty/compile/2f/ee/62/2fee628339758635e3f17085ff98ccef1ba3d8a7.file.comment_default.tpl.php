<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:26:16
         compiled from "/home/admiraltza/www/modules/jmsblog/views/templates/front/comment_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242942161586a8d383ebb71-62540353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fee628339758635e3f17085ff98ccef1ba3d8a7' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsblog/views/templates/front/comment_default.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242942161586a8d383ebb71-62540353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'jmsblog_setting' => 0,
    'cerrors' => 0,
    'cerror' => 0,
    'comments' => 0,
    'image_baseurl' => 0,
    'comment' => 0,
    'logged' => 0,
    'post' => 0,
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8d3843f879_81140328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8d3843f879_81140328')) {function content_586a8d3843f879_81140328($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['msg']->value==1) {?><div class="success"><?php echo smartyTranslate(array('s'=>'Your comment submited','mod'=>'jmsblog'),$_smarty_tpl);?>
 ! <?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_AUTO_APPROVE_COMMENT']==0) {?> <?php echo smartyTranslate(array('s'=>'Please waiting approve from Admin','mod'=>'jmsblog'),$_smarty_tpl);?>
.<?php }?></div><?php }?>
<?php if (count($_smarty_tpl->tpl_vars['cerrors']->value)>0) {?>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['cerror'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cerror']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cerrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cerror']->key => $_smarty_tpl->tpl_vars['cerror']->value) {
$_smarty_tpl->tpl_vars['cerror']->_loop = true;
?>
		<li class="error"><?php echo $_smarty_tpl->tpl_vars['cerror']->value;?>
</li>
	<?php } ?>	
	</ul>
<?php }?>
<div id="accordion" class="panel-group">
	<div class="panel panel-default">
		<div class="comment-heading clearfix">
			<h5><a data-toggle="collapse" data-parent="#accordion" href="#post-comments"><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 <?php echo smartyTranslate(array('s'=>'Comments','mod'=>'jmsblog'),$_smarty_tpl);?>
</a></h5>
		</div>		
		<div id="post-comments" class="panel-collapse collapse">
		<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['comment']->key;
?>
				<div class="post-comment clearfix">
					<div class="post-comment-info">
					<img class="attachment-widget wp-post-image img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true);?>
user.png" />
					<h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
</h6>
					<span class="customer_site"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_site'], ENT_QUOTES, 'UTF-8', true);?>
</span>
					<span class="time_add"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['time_add'], ENT_QUOTES, 'UTF-8', true);?>
</small>
					</div>
					<p class="post-comment-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</p>
				</div>
			<?php } ?>	
		<?php }?>
		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT']||(!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT']&&$_smarty_tpl->tpl_vars['logged']->value)) {?>	
<div class="commentForm">
	<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8', true);?>
&action=submitComment">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="heading">Leave a Comment</h4>
				<p class="h-info"><?php echo smartyTranslate(array('s'=>'Your email address will not be published','mod'=>'jmsblog'),$_smarty_tpl);?>
.</p>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_name"><?php echo smartyTranslate(array('s'=>'Your Name','mod'=>'jmsblog'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<input id="customer_name" class="form-control" name="customer_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['lastname'];?>
" required />
				</div>	
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_title"><?php echo smartyTranslate(array('s'=>'Your Email','mod'=>'jmsblog'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<input id="comment_title" class="form-control" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
" required />
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="comment_title"><?php echo smartyTranslate(array('s'=>'Your Website','mod'=>'jmsblog'),$_smarty_tpl);?>
</label>
			<input id="customer_site" class="form-control" name="customer_site" type="text" value=""/></br>
		</div>
		<div class="form-group">
			<label for="content"><?php echo smartyTranslate(array('s'=>'Your Comment','mod'=>'jmsblog'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
			<textarea id="comment" class="form-control" name="comment" rows="8" required></textarea>
		</div>
		<div id="new_comment_form_footer">
			<input id="item_id_comment_send" name="post_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8', true);?>
" />
			<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
			<p class="">
				<button id="submitComment" class="btn btn-default" name="submitComment" type="submit"><?php echo smartyTranslate(array('s'=>'Submit Comment','mod'=>'jmsblog'),$_smarty_tpl);?>
</button>
			</p>
		</div>
	</form>
	<script>
	$("#commentForm").validate({
	  rules: {		
		customer_name: "required",		
		email: {
		  required: true,
		  email: true
		}
	  }
	});
	</script>
</div>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT']&&!$_smarty_tpl->tpl_vars['logged']->value) {?>
	<?php echo smartyTranslate(array('s'=>'Please Login to comment','mod'=>'jmsblog'),$_smarty_tpl);?>

<?php }?><?php }} ?>
