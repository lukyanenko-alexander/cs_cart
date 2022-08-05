<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:01
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_min_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0291891209_05986384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '635c353fd35f38d781059f33254da5f859583aa8' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_min_qty.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0291891209_05986384 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("min_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
