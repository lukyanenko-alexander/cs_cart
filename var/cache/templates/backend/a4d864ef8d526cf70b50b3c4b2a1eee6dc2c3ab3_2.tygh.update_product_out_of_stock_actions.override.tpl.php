<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:08
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0298247780_80923207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4d864ef8d526cf70b50b3c4b2a1eee6dc2c3ab3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0298247780_80923207 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("out_of_stock_actions")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
