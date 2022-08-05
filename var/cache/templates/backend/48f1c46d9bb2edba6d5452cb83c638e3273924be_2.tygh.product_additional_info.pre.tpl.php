<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:30:59
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02530ce474_29584633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f1c46d9bb2edba6d5452cb83c638e3273924be' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_62ec02530ce474_29584633 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0, false);
}
}
}
