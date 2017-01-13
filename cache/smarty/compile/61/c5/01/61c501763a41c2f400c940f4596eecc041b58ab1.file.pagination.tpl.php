<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:26:46
         compiled from "/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_post/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1463686741586a8d56a13b17-87228914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c501763a41c2f400c940f4596eecc041b58ab1' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_post/pagination.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1463686741586a8d56a13b17-87228914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'limit' => 0,
    'pages' => 0,
    'foo' => 0,
    'start' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8d56a36732_25166887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8d56a36732_25166887')) {function content_586a8d56a36732_25166887($_smarty_tpl) {?>
<div class="jms-blog-pagination">	
	<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['limit']->value) {?>
	<div class="pagination">
		<ul>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<li class="<?php if (($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value==$_smarty_tpl->tpl_vars['start']->value) {?>active<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&start=<?php echo ((mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))-1)*$_smarty_tpl->tpl_vars['limit']->value;?>
&limit=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
		<?php }} ?>
		</ul>
	</div>
	<?php }?>
	<div class="counter-div">
		<span>Total : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8', true);?>
 items</span>
	</div>
</div><?php }} ?>
