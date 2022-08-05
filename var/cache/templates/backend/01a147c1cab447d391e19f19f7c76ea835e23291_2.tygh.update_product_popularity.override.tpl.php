<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:10
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029a3d0956_15917175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a147c1cab447d391e19f19f7c76ea835e23291' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029a3d0956_15917175 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
