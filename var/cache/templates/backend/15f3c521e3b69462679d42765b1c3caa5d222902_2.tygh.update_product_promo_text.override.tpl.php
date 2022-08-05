<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:11
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_promo_text.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029b3fe688_89151400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f3c521e3b69462679d42765b1c3caa5d222902' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_promo_text.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029b3fe688_89151400 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("promo_text")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
