<?php
/* Smarty version 3.1.43, created on 2022-03-10 15:55:13
  from '/web/a20davidvg.kozow.com/public/shop/modules/ps_checkout/views/templates/hook/displayProductPriceBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622a11519b02e2_41267557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '122429fe2269ba790062c3e402e41733227cb807' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/modules/ps_checkout/views/templates/hook/displayProductPriceBlock.tpl',
      1 => 1646923973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a11519b02e2_41267557 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['totalCartPrice']->value)) && $_smarty_tpl->tpl_vars['payIn4XisProductPageEnabled']->value == true) {?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || $_smarty_tpl->tpl_vars['content_only']->value === 0) {?>
    <div
      data-pp-message
      data-pp-placement="product"
      data-pp-style-layout="text"
      data-pp-style-logo-type="inline"
      data-pp-style-text-color="black"
      data-pp-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totalCartPrice']->value, ENT_QUOTES, 'UTF-8');?>
"
    ></div>
    <?php echo '<script'; ?>
>
      window.ps_checkoutPayPalSdkInstance
        && window.ps_checkoutPayPalSdkInstance.Messages
        && window.ps_checkoutPayPalSdkInstance.Messages().render('[data-pp-message]');
    <?php echo '</script'; ?>
>
  <?php }
}
}
}
