<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:29:06
         compiled from "/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_comment/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957712717586a8de2a13313-82494815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3c1bd80fcd2fc77eb5751757f0c8656400acf9e' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_comment/filter.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957712717586a8de2a13313-82494815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'categories' => 0,
    'category' => 0,
    'category_index' => 0,
    'posts' => 0,
    'post' => 0,
    'filter_post_id' => 0,
    'filter_cstate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8de2a7a723_20860407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8de2a7a723_20860407')) {function content_586a8de2a7a723_20860407($_smarty_tpl) {?>
<script type="text/javascript">
$( document ).ready(function() {
	$( "#filter_post_id" ).change(function() {
		filterchange();
	});
	$( "#filter_cstate" ).change(function() {
		filterchange();
	});
});
function filterchange(){
	var post_id = $( "#filter_post_id" ).val();
	var state = $( "#filter_cstate" ).val();
	var url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&filter_post_id=" + post_id + "&filter_cstate=" + state;
	url = url.replace('&amp;','&');
	window.location = url;
}
</script>
<div class="jms-blog-filter">
	<span><?php echo smartyTranslate(array('s'=>'Post Filter','mod'=>'jmsblog'),$_smarty_tpl);?>
</span>
	<select id="filter_post_id">
		<option value="0"><?php echo smartyTranslate(array('s'=>'Select Post','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['category_index'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['category']->value['category_id']), null, 0);?>		
		<optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->tpl_vars['category_index']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['post_id']==$_smarty_tpl->tpl_vars['filter_post_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</option>
			<?php } ?>
		</optgroup>
		<?php } ?>
	</select>
	
	<span><?php echo smartyTranslate(array('s'=>'State Filter','mod'=>'jmsblog'),$_smarty_tpl);?>
</span>
	<select id="filter_cstate">
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value=='-1') {?>selected<?php }?> value="-1"><?php echo smartyTranslate(array('s'=>'Select Status','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value=='1') {?>selected<?php }?> value="1"><?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value=='0') {?>selected<?php }?> value="0"><?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value=='-2') {?>selected<?php }?> value="-2"><?php echo smartyTranslate(array('s'=>'Waiting for approve','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>		
	</select>
	
</div><?php }} ?>
