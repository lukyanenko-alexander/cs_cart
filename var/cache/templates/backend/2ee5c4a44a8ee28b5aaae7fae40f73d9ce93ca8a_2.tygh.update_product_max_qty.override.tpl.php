<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:02
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029211d426_99680829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee5c4a44a8ee28b5aaae7fae40f73d9ce93ca8a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029211d426_99680829 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("max_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
