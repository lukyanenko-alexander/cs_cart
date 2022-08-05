<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:07
  from '/var/www/html/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec025bc4f650_53607492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f2948accbbf13f04f56f9316df9253ac3e4cc9a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec025bc4f650_53607492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('import_product_href', "import_presets.manage&object_type=products" ,false ,2);
$_smarty_tpl->_assignInScope('has_permission_an_import', fn_check_permissions("import_presets","update","admin","POST") ,false ,2);
}
}
