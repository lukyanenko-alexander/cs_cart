<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:12
  from '/var/www/html/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02600df724_63490749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a328be812ddc606e9b01a49b962e4c0ef02f645e' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02600df724_63490749 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }
}
