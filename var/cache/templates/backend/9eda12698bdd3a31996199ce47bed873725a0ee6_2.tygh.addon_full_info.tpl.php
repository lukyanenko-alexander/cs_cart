<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:25:59
  from '/var/www/html/design/backend/templates/views/addons/components/addons/addon_full_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec0127425921_12667205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eda12698bdd3a31996199ce47bed873725a0ee6' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/addons/addon_full_info.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec0127425921_12667205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('active','disabled','not_installed','na','na','verified','installed_version','addons.latest_version','installed_version','addons.latest_version','addons.latest_available_for_installation_version','installed_version','version','installed_date','developer','addon_id','status','installed_date'));
?>

<?php $_smarty_tpl->_assignInScope('ADDON_NAME_LIMIT', 50 ,false ,2);?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->_assignInScope('status_description', $_smarty_tpl->__("active"));
} elseif ($_smarty_tpl->tpl_vars['addon']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->_assignInScope('status_description', $_smarty_tpl->__("disabled"));
} elseif ($_smarty_tpl->tpl_vars['addon']->value['status'] === smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->_assignInScope('status_description', $_smarty_tpl->__("not_installed"));
}
$_smarty_tpl->_assignInScope('installed_version', $_smarty_tpl->tpl_vars['addon']->value['version']);
$_smarty_tpl->_assignInScope('latest_version', (($tmp = $_smarty_tpl->tpl_vars['addon']->value['latest_upgrade_version'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("na") ?? null : $tmp));
$_smarty_tpl->_assignInScope('actual_version', (($tmp = $_smarty_tpl->tpl_vars['addon']->value['actual_version'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("na") ?? null : $tmp));
ob_start();
echo $_smarty_tpl->__("verified");
$_prefixVariable15=ob_get_clean();
$_smarty_tpl->_assignInScope('verified_developer', $_smarty_tpl->tpl_vars['a']->value['identified'] || $_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? " (".$_prefixVariable15.")" : '');?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_long_name'] = (mb_strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['a']->value['name']), 'UTF-8') > $_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value);
$_smarty_tpl->_assignInScope('a', $_tmp_array ,false ,2);
$_tmp_array = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['short_name'] = (($tmp = smarty_modifier_truncate($_smarty_tpl->tpl_vars['a']->value['name'],$_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value,"...",true) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value ?? null : $tmp);
$_smarty_tpl->_assignInScope('a', $_tmp_array ,false ,2);?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] || !$_smarty_tpl->tpl_vars['addon']->value['actual_version']) {?>
    <?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_version_info', $_prefixVariable16.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value) ,false ,2);?>

<?php } elseif ($_smarty_tpl->tpl_vars['actual_version']->value === $_smarty_tpl->tpl_vars['latest_version']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_prefixVariable17=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("installed_version");
$_prefixVariable18=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_version_info', $_prefixVariable17.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_prefixVariable18.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value) ,false ,2);?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_prefixVariable19=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("addons.latest_available_for_installation_version");
$_prefixVariable20=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("installed_version");
$_prefixVariable21=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_version_info', $_prefixVariable19.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_prefixVariable20.":
".((string)$_smarty_tpl->tpl_vars['latest_version']->value)."

".$_prefixVariable21.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value) ,false ,2);?>

<?php }?>

<?php $_smarty_tpl->_assignInScope('install_datetime_format', smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])));?>

<?php ob_start();
echo $_smarty_tpl->__("version");
$_prefixVariable22=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("installed_date");
$_prefixVariable23=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("developer");
$_prefixVariable24=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("addon_id");
$_prefixVariable25=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("status");
$_prefixVariable26=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_description', ((string)$_smarty_tpl->tpl_vars['addon']->value['name'])."

".((string)(strip_tags($_smarty_tpl->tpl_vars['addon']->value['description'])))."

".$_prefixVariable22.": ".((string)((($tmp = $_smarty_tpl->tpl_vars['addon']->value['version'] ?? null)===null||$tmp==='' ? 0.1 ?? null : $tmp)))."
".$_prefixVariable23.": ".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value)."
".$_prefixVariable24.": ".((string)$_smarty_tpl->tpl_vars['a']->value['supplier']).((string)$_smarty_tpl->tpl_vars['verified_developer']->value)."
".$_prefixVariable25.": ".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])."
".$_prefixVariable26.": ".((string)$_smarty_tpl->tpl_vars['status_description']->value) ,false ,2);?>

<?php ob_start();
echo $_smarty_tpl->__("installed_date");
$_prefixVariable27=ob_get_clean();
$_smarty_tpl->_assignInScope('install_datetime_full_info', $_prefixVariable27.":
".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value) ,false ,2);
}
}
