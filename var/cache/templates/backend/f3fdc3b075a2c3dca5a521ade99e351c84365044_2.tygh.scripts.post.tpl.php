<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:26:13
  from '/var/www/html/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0135187326_12061141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3fdc3b075a2c3dca5a521ade99e351c84365044' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0135187326_12061141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>

<?php }
}
