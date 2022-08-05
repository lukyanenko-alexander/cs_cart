<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:59
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec028f852ef6_78955740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a534131c9eb3bde2ce5e05ae8b87576c57ee09' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec028f852ef6_78955740 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_price")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
