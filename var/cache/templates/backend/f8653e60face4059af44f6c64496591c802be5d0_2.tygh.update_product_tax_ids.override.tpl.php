<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:03
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_tax_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02938f79a2_54991229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8653e60face4059af44f6c64496591c802be5d0' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_tax_ids.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02938f79a2_54991229 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tax_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
