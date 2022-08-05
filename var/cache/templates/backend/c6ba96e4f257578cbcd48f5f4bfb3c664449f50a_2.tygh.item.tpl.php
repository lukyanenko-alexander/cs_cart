<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:15
  from '/var/www/html/design/backend/templates/views/product_features/components/variants_picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029f232a15_11245473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6ba96e4f257578cbcd48f5f4bfb3c664449f50a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/product_features/components/variants_picker/item.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029f232a15_11245473 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__product-feature-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }
}
