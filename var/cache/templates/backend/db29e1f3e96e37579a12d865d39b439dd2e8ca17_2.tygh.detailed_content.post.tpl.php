<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:16
  from '/var/www/html/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02a02757a5_90680112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db29e1f3e96e37579a12d865d39b439dd2e8ca17' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/social_buttons/common/facebook_types.tpl' => 1,
  ),
),false)) {
function content_62ec02a02757a5_90680112 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0, false);
}
}
}
