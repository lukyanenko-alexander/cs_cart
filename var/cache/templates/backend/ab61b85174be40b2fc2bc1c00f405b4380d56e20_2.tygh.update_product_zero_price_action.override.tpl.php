<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:00
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_zero_price_action.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029087e508_95938821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab61b85174be40b2fc2bc1c00f405b4380d56e20' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_zero_price_action.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029087e508_95938821 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("zero_price_action")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
