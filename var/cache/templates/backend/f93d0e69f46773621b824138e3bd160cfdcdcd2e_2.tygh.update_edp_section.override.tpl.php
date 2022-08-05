<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:09
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_edp_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029939f9f7_18127451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93d0e69f46773621b824138e3bd160cfdcdcd2e' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_edp_section.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029939f9f7_18127451 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("edp")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
