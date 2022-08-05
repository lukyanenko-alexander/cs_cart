<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:17
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02a15f60e8_92480693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a921ff69a68ae482d20faf9ccdacbfe7b7b0981' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02a15f60e8_92480693 (Smarty_Internal_Template $_smarty_tpl) {
?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }
}
