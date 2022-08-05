<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:09
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_short_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0299b54044_56548680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7326765acea7bb551c69c7faa8710e2a61c842' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_short_description.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0299b54044_56548680 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("short_description")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
