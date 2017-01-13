<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:26:46
         compiled from "/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_post/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1035605045586a8d5694fdb9-04036074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a24477440cfa5cb22fd5da13e67f29b2829ce440' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_post/filter.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035605045586a8d5694fdb9-04036074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'categories' => 0,
    'category' => 0,
    'filter_category_id' => 0,
    'filter_state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8d56999004_39859484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8d56999004_39859484')) {function content_586a8d56999004_39859484($_smarty_tpl) {?>
<script type="text/javascript">
$( document ).ready(function() {
	$( "#filter_category_id" ).change(function() {
		filterchange();
	});
	$( "#filter_state" ).change(function() {
		filterchange();
	});
});
function filterchange(){
	var category_id = $( "#filter_category_id" ).val();
	var state = $( "#filter_state" ).val();
	var url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&filter_category_id=" + category_id + "&filter_state=" + state;
	url = url.replace('&amp;','&');
	window.location = url;
}
</script>
<div class="jms-blog-filter">
	<span><?php echo smartyTranslate(array('s'=>'Category Filter','mod'=>'jmsblog'),$_smarty_tpl);?>
</span>
	<select id="filter_category_id">
		<option value="0"><?php echo smartyTranslate(array('s'=>'Select Category','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<option <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==$_smarty_tpl->tpl_vars['filter_category_id']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
		<?php } ?>
	</select>
	
	<span><?php echo smartyTranslate(array('s'=>'State Filter','mod'=>'jmsblog'),$_smarty_tpl);?>
</span>
	<select id="filter_state">
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value==-1) {?>selected<?php }?> value="-1"><?php echo smartyTranslate(array('s'=>'Select Status','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value==1) {?>selected<?php }?> value="1"><?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value==0) {?>selected<?php }?> value="0"><?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'jmsblog'),$_smarty_tpl);?>
</option>
	</select>
</div><?php }} ?>
