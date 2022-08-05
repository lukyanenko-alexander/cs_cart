<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:11
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_seo_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029bbe5155_53957252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4bed2e1c49710c25e902afac4b32e9dbc72f45' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_seo_settings.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029bbe5155_53957252 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("seo")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
