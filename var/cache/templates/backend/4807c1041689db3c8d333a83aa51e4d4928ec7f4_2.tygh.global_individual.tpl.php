<?php
/* Smarty version 4.1.0, created on 2022-08-05 07:35:47
  from '/var/www/html/design/backend/templates/components/global_individual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec9e23cdae14_63682107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4807c1041689db3c8d333a83aa51e4d4928ec7f4' => 
    array (
      0 => '/var/www/html/design/backend/templates/components/global_individual.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec9e23cdae14_63682107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('default','global_individual.global_tooltip','global_individual.individual_tooltip'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/components/global_individual.js"),$_smarty_tpl);?>


<div class="global-individual"
    data-ca-global-individual="component"
    data-ca-global-individual-default-text="<?php echo $_smarty_tpl->__("default");?>
"
    data-ca-global-individual-html-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-individual-html-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['individual_html_name'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-global-html-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['global_html_name'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-has-value-holder-for-disabled-control="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['has_value_holder']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-is-global="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['has_global_value'], ENT_QUOTES, 'UTF-8');?>
"
>
    <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_empty_global_value"
        class="hidden"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['global_html_name'], ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars(constant("\Tygh\Settings::NULL_VALUE"), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-global-individual="hiddenInput">
    <div class="global-individual__field-wrapper"
        data-ca-global-individual="fieldWrapper"
    >
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
    <div class="global-individual__buttons">
        <input
            type="checkbox"
            class="global-individual__btn cm-tooltip
                <?php if (!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>global-individual__btn--individual<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>global-individual__btn--disabled<?php }?>"
            data-ca-global-individual="button"
            title="<div class='global-individual__tooltip'>
                    <span <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>class='hidden'<?php }?>
                        data-ca-global-individual-html-id='tooltip_global_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
'
                    ><?php echo $_smarty_tpl->__("global_individual.global_tooltip");?>
</span>
                    <span <?php if (!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>class='hidden'<?php }?>
                        data-ca-global-individual-html-id='tooltip_individual_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
'
                    ><?php echo $_smarty_tpl->__("global_individual.individual_tooltip");?>
</span>
                </div>
            "
        />
        <?php if (trim($_smarty_tpl->tpl_vars['extra']->value) !== '') {?>
            <div class="global-individual__container">
                <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

            </div>
        <?php }?>
    </div>
</div>
<?php }
}
