<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:31:57
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_options_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec028d788253_21580470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '413ae2cb4632788b1ffa9a96d29a5abb3f4bc0c5' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_options_settings.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec028d788253_21580470 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("options_type") && !$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("exceptions_type")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
