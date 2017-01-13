<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:29:06
         compiled from "/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_comment/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934596906586a8de2b06a77-37336478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2520ca9740ab4c92649f8bfdfdb194f3c4039ed7' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_comment/pagination.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934596906586a8de2b06a77-37336478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ctotal' => 0,
    'climit' => 0,
    'cpages' => 0,
    'foo' => 0,
    'cstart' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8de2b29150_37655899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8de2b29150_37655899')) {function content_586a8de2b29150_37655899($_smarty_tpl) {?>
<div class="jms-blog-pagination">	
	<?php if ($_smarty_tpl->tpl_vars['ctotal']->value>$_smarty_tpl->tpl_vars['climit']->value) {?>
	<div class="pagination">
		<ul>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['cpages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['cpages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<li class="<?php if (($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['climit']->value==$_smarty_tpl->tpl_vars['cstart']->value) {?>active<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&cstart=<?php echo ((mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))-1)*$_smarty_tpl->tpl_vars['climit']->value;?>
&climit=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['climit']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
		<?php }} ?>
		</ul>
	</div>
	<?php }?>
	<div class="counter-div">
		<span>Total : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ctotal']->value, ENT_QUOTES, 'UTF-8', true);?>
 items</span>
	</div>
</div><?php }} ?>
