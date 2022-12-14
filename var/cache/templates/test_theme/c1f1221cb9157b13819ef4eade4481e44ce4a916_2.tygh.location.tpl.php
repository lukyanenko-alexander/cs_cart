<?php
/* Smarty version 4.1.0, created on 2022-08-05 03:41:57
  from '/var/www/html/design/themes/responsive/templates/views/block_manager/render/location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec675506ec89_76081634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1f1221cb9157b13819ef4eade4481e44ce4a916' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/block_manager/render/location.tpl',
      1 => 1659580134,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec675506ec89_76081634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('choose_your_country'));
?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
<div class="tygh-header clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

</div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:frontend_location_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:frontend_location_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
    <div class="tygh-content clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

    </div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:frontend_location_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <?php echo '<script'; ?>
>
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            <?php echo '</script'; ?>
>
    <?php }
}?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
