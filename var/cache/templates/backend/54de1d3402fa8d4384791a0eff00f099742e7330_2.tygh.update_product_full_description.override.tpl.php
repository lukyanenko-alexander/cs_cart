<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:55
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_full_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec028b4e6796_69865972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54de1d3402fa8d4384791a0eff00f099742e7330' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_full_description.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec028b4e6796_69865972 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("full_description")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
