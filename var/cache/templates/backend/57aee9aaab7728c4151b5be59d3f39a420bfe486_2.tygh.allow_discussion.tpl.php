<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:16
  from '/var/www/html/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02a0357db9_84741567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57aee9aaab7728c4151b5be59d3f39a420bfe486' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02a0357db9_84741567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['no_hide_input']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="discussion_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
:</label>
    <div class="controls">

        <?php if (!$_smarty_tpl->tpl_vars['discussion']->value) {?>
        <?php $_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('discussion_types_list', fn_discussion_get_discussion_types());?>
        <?php $_smarty_tpl->_assignInScope('discussion_type', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['discussion']->value['type'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['discussion_default_type']->value ?? null : $tmp) ?? null)===null||$tmp==='' ? (smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) ?? null : $tmp));?>

        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discussion_type]" id="discussion_type">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion_types_list']->value, 'type_name', false, 'type');
$_smarty_tpl->tpl_vars['type_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion_type']->value == $_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion_types_list']->value[$_smarty_tpl->tpl_vars['discussion_type']->value], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>

    </div>
</div><?php }
}
