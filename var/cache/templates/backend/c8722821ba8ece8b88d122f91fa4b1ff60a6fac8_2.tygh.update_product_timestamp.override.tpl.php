<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:07
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_timestamp.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02972305d4_90317825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8722821ba8ece8b88d122f91fa4b1ff60a6fac8' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_timestamp.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02972305d4_90317825 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("timestamp")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
