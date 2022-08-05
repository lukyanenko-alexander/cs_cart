<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:25:55
  from '/var/www/html/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec01230a0b86_15502994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aabf6461d480bdd2769979cb79a5b682eb26b085' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec01230a0b86_15502994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }
}
}
