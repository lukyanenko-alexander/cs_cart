<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:25:54
  from '/var/www/html/design/backend/templates/common/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec01226f2300_39271954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6322f92e441573fbdf200f4ce7e5ffc22d5c92' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/styles.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/statuses/components/styles.tpl' => 1,
  ),
),false)) {
function content_62ec01226f2300_39271954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.styles.php','function'=>'smarty_block_styles',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array());
$_block_repeat=true;
echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php echo smarty_function_style(array('src'=>"ui/jqueryui.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:styles"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
            <?php echo smarty_function_style(array('src'=>"config_vendor.less"),$_smarty_tpl);?>

        <?php }?>
        <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>


        <?php $_smarty_tpl->_subTemplateRender("tygh:views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>(defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == 'rtl') {?>
            <?php echo smarty_function_style(array('src'=>"rtl.less"),$_smarty_tpl);?>

        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php echo smarty_function_style(array('src'=>"font-awesome.css"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['is_setup_wizard_panel_available']->value) {?>
        <?php echo smarty_function_style(array('src'=>"/js/lib/ladda-bootstrap/dist/ladda-themeless.css"),$_smarty_tpl);?>

    <?php }
$_block_repeat=false;
echo smarty_block_styles(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
