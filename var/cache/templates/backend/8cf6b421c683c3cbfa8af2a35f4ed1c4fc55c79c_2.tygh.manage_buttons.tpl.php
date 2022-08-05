<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:26:01
  from '/var/www/html/design/backend/templates/views/addons/components/manage/manage_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0129db5d84_81250908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf6b421c683c3cbfa8af2a35f4ed1c4fc55c79c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/manage/manage_buttons.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/upload_addon.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_62ec0129db5d84_81250908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('upload_addon','upload_addon','manual_installation','tools_addons_disable_all','tools_addons_disable_third_party'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->_assignInScope('is_addon_management_enabled', true);?>
        <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['selected_storefront_id']->value || fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php $_smarty_tpl->_assignInScope('is_addon_management_enabled', false);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_addon_management_enabled']->value && !defined("RESTRICTED_ADMIN")) {?>
            <li>
                <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/upload_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable33 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_addon",'text'=>$_smarty_tpl->__("upload_addon"),'title'=>$_smarty_tpl->__("upload_addon"),'content'=>($_prefixVariable33),'act'=>"edit",'link_class'=>"cm-dialog-auto-size",'link_text'=>$_smarty_tpl->__("manual_installation")), 0, false);
?>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_addon_management_enabled']->value && $_smarty_tpl->tpl_vars['settings']->value['init_addons'] !== 'none') {?>
            <li>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'method'=>"POST",'text'=>$_smarty_tpl->__("tools_addons_disable_all"),'href'=>"addons.tools?init_addons=none"), true);?>

            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_addon_management_enabled']->value && ($_smarty_tpl->tpl_vars['settings']->value['init_addons'] !== 'core' && $_smarty_tpl->tpl_vars['settings']->value['init_addons'] !== 'none')) {?>
            <li>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'method'=>"POST",'text'=>$_smarty_tpl->__("tools_addons_disable_third_party"),'href'=>"addons.tools?init_addons=core"), true);?>

            </li>
        <?php }?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);
}
}
