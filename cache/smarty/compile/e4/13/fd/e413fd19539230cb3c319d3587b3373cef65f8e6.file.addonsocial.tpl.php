<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:26
         compiled from "/home/admiraltza/www/modules/jmspagebuilder/views/templates/hook/addonsocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315851718586a7a0a809521-61498955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e413fd19539230cb3c319d3587b3373cef65f8e6' => 
    array (
      0 => '/home/admiraltza/www/modules/jmspagebuilder/views/templates/hook/addonsocial.tpl',
      1 => 1482999912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315851718586a7a0a809521-61498955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'linkedin_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0a82c191_85976226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0a82c191_85976226')) {function content_586a7a0a82c191_85976226($_smarty_tpl) {?>
<div id="social_block">
	<ul class="find-us">
       <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="facebook"><span class="fa fa-facebook"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="twitter"><span class="fa fa-twitter"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkedin_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="linkedin"><span class="fa fa-linkedin"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="youtube"><span class="fa fa-youtube"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="gplus"><span class="fa fa-google-plus"></span></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="pinterest"><span class="fa fa-pinterest"></span></a></li><?php }?>            
    </ul>
</div>
<?php }} ?>
