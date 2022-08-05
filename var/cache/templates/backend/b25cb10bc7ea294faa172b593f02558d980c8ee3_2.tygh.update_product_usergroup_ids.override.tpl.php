<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:06
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_usergroup_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02961ee9a7_40489570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25cb10bc7ea294faa172b593f02558d980c8ee3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_usergroup_ids.override.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02961ee9a7_40489570 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("usergroup_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
