<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:03
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_list_qty_count.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0293135568_42460946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48e2553f6a056fc5313b208739fb8de8c3ca3bad' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_list_qty_count.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0293135568_42460946 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_qty_count")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
