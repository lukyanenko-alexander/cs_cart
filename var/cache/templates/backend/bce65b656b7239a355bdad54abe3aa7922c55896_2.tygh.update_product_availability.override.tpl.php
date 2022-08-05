<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:04
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02941f4ab5_51495697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce65b656b7239a355bdad54abe3aa7922c55896' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02941f4ab5_51495697 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("availability")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
