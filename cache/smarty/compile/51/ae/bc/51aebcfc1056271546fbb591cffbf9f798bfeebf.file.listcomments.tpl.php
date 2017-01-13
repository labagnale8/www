<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 18:29:06
         compiled from "/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_comment/listcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1241521807586a8de2a949d6-08126748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51aebcfc1056271546fbb591cffbf9f798bfeebf' => 
    array (
      0 => '/home/admiraltza/www/modules/jmsblog/views/templates/admin/jmsblog_comment/listcomments.tpl',
      1 => 1482999911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1241521807586a8de2a949d6-08126748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waiting_total' => 0,
    'link' => 0,
    'items' => 0,
    'comment' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a8de2af1882_00163160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a8de2af1882_00163160')) {function content_586a8de2af1882_00163160($_smarty_tpl) {?>
<div class="panel">
	<h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Comments','mod'=>'jmsblog'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['waiting_total']->value>0) {?>
		<div class="pull-right">
		<?php echo smartyTranslate(array('s'=>'There is ','mod'=>'jmsblog'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['waiting_total']->value;?>
 <?php echo smartyTranslate(array('s'=>'comments waiting approve','mod'=>'jmsblog'),$_smarty_tpl);?>
 	
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&ApproveAll" class="btn" title="#" >
		<i class="icon-warning"></i> <?php echo smartyTranslate(array('s'=>'Approve All','mod'=>'jmsblog'),$_smarty_tpl);?>

		</a>	
		</div>
	<?php }?>
	</h3>
	<div class="table-responsive-row clearfix">
		<table class="table tableDnD"><tbody id="posts">
			<tr class="heading">
				<th><?php echo smartyTranslate(array('s'=>'ID','mod'=>'jmsblog'),$_smarty_tpl);?>
</th>				
				<th><?php echo smartyTranslate(array('s'=>'Name','mod'=>'jmsblog'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Time','mod'=>'jmsblog'),$_smarty_tpl);?>
</th>				
				<th><?php echo smartyTranslate(array('s'=>'Comment','mod'=>'jmsblog'),$_smarty_tpl);?>
</th>				
				<th class="right"><?php echo smartyTranslate(array('s'=>'Action','mod'=>'jmsblog'),$_smarty_tpl);?>
</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['comment']->key;
?>
				<tr id="posts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>odd<?php }?>">					
					<td class="row-id">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment_id'], ENT_QUOTES, 'UTF-8', true);?>
 
					</td>					
					<td class="name">
						<h4 class="pull-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
					</td>
					<td class="time">
						<h4 class="pull-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['time_add'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
					</td>
					<td class="comment">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>

					</td>					
					<td>
						<div class="btn-group-action pull-right">
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==-2) {?>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&status_id_comment=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment_id'], ENT_QUOTES, 'UTF-8', true);?>
&Approve" class="btn btn-warning" title="#" >
									<i class="icon-warning"></i> <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==-2) {?><?php echo smartyTranslate(array('s'=>'Approve','mod'=>'jmsblog'),$_smarty_tpl);?>
<?php }?>
								</a>
							<?php } else { ?>
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==1) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&status_id_comment=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment_id'], ENT_QUOTES, 'UTF-8', true);?>
&changeCommentStatus" title="<?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==1) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==1) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==1) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
							<?php }?>
							<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment'), ENT_QUOTES, 'UTF-8', true);?>
&configure=jmsblog&delete_id_comment=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment_id'], ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('Are you sure you want to delete this item?');">
								<i class="icon-trash"></i>
								<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'jmsblog'),$_smarty_tpl);?>

							</a>
						</div>
					</td>
				</tr>				
			<?php } ?>
		</tbody></table>
	</div>		
</div><?php }} ?>
