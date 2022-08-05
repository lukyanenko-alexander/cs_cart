<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:00
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_amount.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02900c74b7_49773091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9481bf1a190acacc754f032fea2279f75b4a7cb' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_amount.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02900c74b7_49773091 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("amount")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
