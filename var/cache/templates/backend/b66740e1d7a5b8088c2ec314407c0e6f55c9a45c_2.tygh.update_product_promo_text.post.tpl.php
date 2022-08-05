<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:11
  from '/var/www/html/design/backend/templates/addons/test_module/hooks/products/update_product_promo_text.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec029b426834_48540221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b66740e1d7a5b8088c2ec314407c0e6f55c9a45c' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/test_module/hooks/products/update_product_promo_text.post.tpl',
      1 => 1659628791,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec029b426834_48540221 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('test'));
?>
<div class="control-group">
    <label class="control-label" for="elm_test"><?php echo $_smarty_tpl->__("test");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[test]" id="elm_test" size="20" maxlength="32"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['test'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div><?php }
}
