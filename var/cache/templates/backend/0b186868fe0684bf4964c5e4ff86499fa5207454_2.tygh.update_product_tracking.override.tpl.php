<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:01
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_tracking.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02910e5262_19486240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b186868fe0684bf4964c5e4ff86499fa5207454' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_tracking.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02910e5262_19486240 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tracking")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
