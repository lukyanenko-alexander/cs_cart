<?php
/* Smarty version 4.1.0, created on 2022-08-04 20:32:16
  from '/var/www/html/design/backend/templates/views/products/components/picker/item_extended.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ec02a0d7d019_24729402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7d96da0db3b7f07c1dc05960b98bb6e490fd2a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/products/components/picker/item_extended.tpl',
      1 => 1658909160,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec02a0d7d019_24729402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->_assignInScope('show_simple_product', (($tmp = $_smarty_tpl->tpl_vars['show_simple_product']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>


    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="${data.image.width}" height="${data.image.height}" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: ${data.image_width}px; height: ${data.image_height}px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <?php if ($_smarty_tpl->tpl_vars['type']->value === "result") {?>
            <div class="object-picker__name-content">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                
                    ${data.product ? data.product : data.text}
                 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php } else { ?>
            <a href="${data.url}" class="object-picker__products-name-content object-picker__products-name-content--link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
    </div>

    <div class="object-picker__products-labels">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:object_picker_products_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="object-picker__products-product-code">
                <span class="object-picker__products-product-code-label">${data.product_code ? data.product_code : ``}</span>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>
<?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>
<div class="object-picker__products-price">
    ${data.price_formatted}
</div>
<?php }
}
}
