<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:22
  from '/var/www/html/design/backend/templates/buttons/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02a63c3b18_04857355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '273a14c6d5f7ea79762ff46f727cfa12313aacc1' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/create.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_62ec02a63c3b18_04857355 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create'));
if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->tpl_vars['but_text']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("create"));
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
