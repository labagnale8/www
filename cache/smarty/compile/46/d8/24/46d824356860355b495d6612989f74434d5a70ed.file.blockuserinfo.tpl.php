<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:26
         compiled from "/home/admiraltza/www/themes/jms_delphinus/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1226413464586a7a0a3e8930-46674158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46d824356860355b495d6612989f74434d5a70ed' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1482999908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226413464586a7a0a3e8930-46674158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'homepage' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0a424a14_70032327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0a424a14_70032327')) {function content_586a7a0a424a14_70032327($_smarty_tpl) {?>

<!-- Block user information module HEADER -->
<div class="btn-group compact-hidden user-info">	
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>			
		<a class="btn-xs dropdown-toggle" data-toggle="dropdown" class="login account" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
			<span class="text-box"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
</span><?php if ($_smarty_tpl->tpl_vars['homepage']->value!=1||$_smarty_tpl->tpl_vars['homepage']->value!=5) {?><span class="lnr lnr-chevron-down"></span><?php }?>
		</a>
	<?php } else { ?>
		<a class="btn-xs dropdown-toggle" data-toggle="dropdown" class="login" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
			<span class="text-box"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="lnr lnr-chevron-down"></span>
		</a>
	<?php }?>
	<ul role="menu" class="dropdown-menu">
		<li><a class="wishlist" href="index.php?fc=module&amp;module=blockwishlist&amp;controller=mywishlist" title="<?php echo smartyTranslate(array('s'=>'View my Wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
			<span class="text-box"><?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</a></li>
		<li><a class="compare" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('compare',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
			<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 </a></li>		
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 </a></li>
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<?php } else { ?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<?php }?>
	</ul>
</div>
<?php }} ?>
