<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 17:21:43
         compiled from "/home/admiraltza/www/modules/jmspagebuilder/views/templates/admin/jmspagebuilder_homepages/listhome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1619972359586a7e17c77a50-12128291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5208533f5b2ee12e92208b33ecf38d4e1db1bf4a' => 
    array (
      0 => '/home/admiraltza/www/modules/jmspagebuilder/views/templates/admin/jmspagebuilder_homepages/listhome.tpl',
      1 => 1482999912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1619972359586a7e17c77a50-12128291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'homepages' => 0,
    'homepage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a7e17cfb643_88903750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a7e17cfb643_88903750')) {function content_586a7e17cfb643_88903750($_smarty_tpl) {?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'HomePages List','mod'=>'jmspagebuilder'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmspagebuilder&addHome=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="rows">
		<div id="homepage_list" class="homepage">
			<?php  $_smarty_tpl->tpl_vars['homepage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['homepage']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['homepages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['homepage']->key => $_smarty_tpl->tpl_vars['homepage']->value) {
$_smarty_tpl->tpl_vars['homepage']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['homepage']->key;
?>
				<div id="homepage_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
							<div class="btn-group-action pull-right">
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmspagebuilder&status_id_homepage=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
								<a class="btn btn-default"									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmspagebuilder&config_id_homepage=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="icon-sitemap"></i>
									<?php echo smartyTranslate(array('s'=>'Layout Config','mod'=>'jmspagebuilder'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmspagebuilder&duplicate_id_homepage=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="icon-copy"></i>
									<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'jmspagebuilder'),$_smarty_tpl);?>

								</a>	
								<a class="btn btn-default"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmspagebuilder&edit_id_homepage=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'jmspagebuilder'),$_smarty_tpl);?>

								</a>								
								<a class="btn btn-default"									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmspagebuilder&delete_id_homepage=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'], ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'jmspagebuilder'),$_smarty_tpl);?>

								</a>								
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>
