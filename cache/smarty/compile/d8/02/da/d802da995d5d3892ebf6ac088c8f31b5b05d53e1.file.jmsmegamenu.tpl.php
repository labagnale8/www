<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:26
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/jmsmegamenu/views/templates/hook/jmsmegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521919270586a7a0a45ed59-15781979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd802da995d5d3892ebf6ac088c8f31b5b05d53e1' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/jmsmegamenu/views/templates/hook/jmsmegamenu.tpl',
      1 => 1482999908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521919270586a7a0a45ed59-15781979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_html' => 0,
    'JMSMM_MOUSEEVENT' => 0,
    'JMSMM_DURATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0a467029_11285183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0a467029_11285183')) {function content_586a7a0a467029_11285183($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/admiraltza/www/tools/smarty/plugins/modifier.escape.php';
?>
<a id="open-button" class="open-button hidden-lg hidden-md" href="#"><span class="fa fa-bars"></span></a>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menu_html']->value, '');?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
    	jQuery('.jms-megamenu').jmsMegaMenu({    			
    		event: '<?php echo $_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value;?>
',
    		duration: <?php echo $_smarty_tpl->tpl_vars['JMSMM_DURATION']->value;?>

    	});		
	});	
</script>
<?php }} ?>
