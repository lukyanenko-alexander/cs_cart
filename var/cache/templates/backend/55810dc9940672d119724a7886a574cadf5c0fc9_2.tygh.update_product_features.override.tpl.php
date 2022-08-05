<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:14
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_features.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029e8266a7_39512643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55810dc9940672d119724a7886a574cadf5c0fc9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_features.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029e8266a7_39512643 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("features")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
