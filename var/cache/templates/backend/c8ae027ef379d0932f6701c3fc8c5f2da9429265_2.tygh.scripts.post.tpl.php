<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:26:13
  from '/var/www/html/design/backend/templates/addons/store_locator/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0135474806_72099217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8ae027ef379d0932f6701c3fc8c5f2da9429265' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/store_locator/hooks/index/scripts.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0135474806_72099217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/store_locator/configure_shipping.js"),$_smarty_tpl);?>

<?php }
}
