<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:10
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_search_words.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029ab8d3e7_99962689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04926a328e820e9790ee44a38dbff5333d0ca2a6' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_search_words.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029ab8d3e7_99962689 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("search_words")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
