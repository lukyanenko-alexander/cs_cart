<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:14
  from '/var/www/html/design/backend/templates/buttons/add_empty_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029e00c894_52325868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f86c8384446f39b25457f058e7f66ac46945ed' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029e00c894_52325868 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }
}
