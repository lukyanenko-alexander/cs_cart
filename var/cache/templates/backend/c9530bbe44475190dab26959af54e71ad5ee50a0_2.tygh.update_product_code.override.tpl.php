<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:59
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_code.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec028f09cde3_90845937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9530bbe44475190dab26959af54e71ad5ee50a0' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_code.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec028f09cde3_90845937 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("product_code")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
