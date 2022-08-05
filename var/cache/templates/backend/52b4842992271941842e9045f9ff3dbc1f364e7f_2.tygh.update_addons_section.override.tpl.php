<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:15
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_addons_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029f9fa887_72529839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b4842992271941842e9045f9ff3dbc1f364e7f' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_addons_section.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029f9fa887_72529839 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isTabAvailable("addons")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
