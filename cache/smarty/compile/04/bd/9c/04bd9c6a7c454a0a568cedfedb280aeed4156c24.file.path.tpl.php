<?php /* Smarty version Smarty-3.1.19, created on 2017-01-04 16:55:32
         compiled from "/home/admiraltza/www/modules/jmstestimonials/views/templates/hook/path.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607553129586d1af4b38e97-20623528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04bd9c6a7c454a0a568cedfedb280aeed4156c24' => 
    array (
      0 => '/home/admiraltza/www/modules/jmstestimonials/views/templates/hook/path.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607553129586d1af4b38e97-20623528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586d1af4b62221_71666204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d1af4b62221_71666204')) {function content_586d1af4b62221_71666204($_smarty_tpl) {?>
<style>
.jms-blog-nav{
	margin-bottom:10px;
}
.jms-blog-menu{
	background: -moz-linear-gradient(center top , #fff 0%, #fff 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0 0 9px rgba(0, 0, 0, 0.15);
    list-style: none outside none;
    padding: 0 20px;
	height: 39px;
    position: relative;
}
.jms-blog-menu li{
	float:left;
}
.jms-blog-menu li:hover,.jms-blog-menu li.active {
    background: -moz-linear-gradient(center top , #4f5964 0%, #5f6975 40%) repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.jms-blog-menu li a{
	color: #757575;
    display: block;
    padding: 10px 20px;
    text-decoration: none !important;
}
.jms-blog-menu li:hover a,.jms-blog-menu li.active a{
	color: #fff;
	text-dicoration:none;
}
</style>
<div class="jms-blog-nav">
	<ul class="jms-blog-menu">
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value=='items') {?>active<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmstestimonials&view=items">Items</a></li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value=='config') {?>active<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmstestimonials&view=config">Config</a></li>
	</ul>
</div><?php }} ?>
