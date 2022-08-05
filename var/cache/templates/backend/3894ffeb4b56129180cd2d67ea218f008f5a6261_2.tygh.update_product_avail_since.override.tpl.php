<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:07
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02979e71d5_12702889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3894ffeb4b56129180cd2d67ea218f008f5a6261' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02979e71d5_12702889 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
