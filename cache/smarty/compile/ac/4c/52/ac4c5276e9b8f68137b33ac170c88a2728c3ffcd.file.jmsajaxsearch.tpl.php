<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:26
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmsajaxsearch/jmsajaxsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:341492651586a7a0a47f5f0-81532285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4c5276e9b8f68137b33ac170c88a2728c3ffcd' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmsajaxsearch/jmsajaxsearch.tpl',
      1 => 1482999908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '341492651586a7a0a47f5f0-81532285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0a486ed5_46793077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0a486ed5_46793077')) {function content_586a7a0a486ed5_46793077($_smarty_tpl) {?>

<div id="jms_ajax_search" class="jms_ajax_search">
	<a href="#"  class="btn-xs search-icon" title="Search">
		<span class="fa fa-search"></span>
	</a>
	<div class="search-box dropdown-menu">	
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search and hit enter...','mod'=>'jmsajaxsearch'),$_smarty_tpl);?>
" class="form-control" />		
		</form>
		<a href="#"  class="fa fa-search">		
		</a>
		<a id="close-search" href="#"  class="fa fa-close">		
		</a>
		<div id="search_result">
		</div>
	</div>	
	<div id="cover-background"> </div> 
</div><?php }} ?>
