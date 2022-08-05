<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:54
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/product_update_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec028ac77bf7_90970063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ba09aefa5d775fbdb2d3382a8a6e6078159ac5' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/product_update_price.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec028ac77bf7_90970063 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("prices")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
