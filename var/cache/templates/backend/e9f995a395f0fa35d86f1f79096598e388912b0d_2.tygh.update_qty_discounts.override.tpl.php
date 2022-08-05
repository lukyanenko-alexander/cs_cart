<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:13
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_qty_discounts.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029dd519b7_53612163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f995a395f0fa35d86f1f79096598e388912b0d' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_qty_discounts.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029dd519b7_53612163 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("prices")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
