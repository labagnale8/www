<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:04:27
         compiled from "/home/admiraltza/www/themes/jms_delphinus/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1229716846586a7a0b1b1270-04505871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b6876a5e4968f8a424c751ce6eaf6df649f929' => 
    array (
      0 => '/home/admiraltza/www/themes/jms_delphinus/footer.tpl',
      1 => 1482999907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229716846586a7a0b1b1270-04505871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'hide_right_column' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'content_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7a0b1c4769_05401391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7a0b1c4769_05401391')) {function content_586a7a0b1c4769_05401391($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>	
				</section>
				<?php if (!$_smarty_tpl->tpl_vars['hide_right_column']->value&&!empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='product') {?>						
				<!-- right -->
				<aside class="col-sm-4 col-md-3 col-lg-3 content-aside">
					<div class="content-aside-inner">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

					</div>
				</aside>
				<?php }?>	
			</div>		
			</section>	
		<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)&&!$_smarty_tpl->tpl_vars['content_only']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
<?php }?>
			</div></div>
		</div><!-- #page -->
		<div class="back-to-top" id="back-to-top">
			<span class="lnr lnr-chevron-up"></span>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
