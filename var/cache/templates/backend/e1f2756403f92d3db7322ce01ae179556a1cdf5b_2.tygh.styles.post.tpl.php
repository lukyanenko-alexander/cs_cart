<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:25:55
  from '/var/www/html/design/backend/templates/addons/advanced_import/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec01230ecea0_90603085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f2756403f92d3db7322ce01ae179556a1cdf5b' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/advanced_import/hooks/index/styles.post.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec01230ecea0_90603085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/advanced_import/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/advanced_import/read_more.less"),$_smarty_tpl);
}
}
