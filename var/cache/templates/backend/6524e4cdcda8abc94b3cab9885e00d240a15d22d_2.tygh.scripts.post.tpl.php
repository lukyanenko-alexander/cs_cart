<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:26:13
  from '/var/www/html/design/backend/templates/addons/seo/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec01354fc2c1_25372167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6524e4cdcda8abc94b3cab9885e00d240a15d22d' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/seo/hooks/index/scripts.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec01354fc2c1_25372167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/seo/func.js"),$_smarty_tpl);
}
}
