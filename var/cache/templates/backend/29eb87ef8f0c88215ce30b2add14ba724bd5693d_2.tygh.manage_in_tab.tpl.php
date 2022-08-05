<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:38
  from '/var/www/html/design/backend/templates/views/tabs/manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02b69bad53_68571873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29eb87ef8f0c88215ce30b2add14ba724bd5693d' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/manage.tpl' => 1,
  ),
),false)) {
function content_62ec02b69bad53_68571873 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_product_tabs--></div>
<?php }
}
