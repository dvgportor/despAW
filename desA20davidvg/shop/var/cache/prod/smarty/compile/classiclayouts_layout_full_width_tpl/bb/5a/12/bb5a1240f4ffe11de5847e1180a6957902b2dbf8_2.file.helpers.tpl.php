<?php
/* Smarty version 3.1.43, created on 2022-03-10 15:54:16
  from '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622a1118545716_33122040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5a1240f4ffe11de5847e1180a6957902b2dbf8' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1646923827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a1118545716_33122040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/web/a20davidvg.kozow.com/public/shop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/bb/5a/12/bb5a1240f4ffe11de5847e1180a6957902b2dbf8_2.file.helpers.tpl.php',
    'uid' => 'bb5a1240f4ffe11de5847e1180a6957902b2dbf8',
    'call_name' => 'smarty_template_function_renderLogo_6588555622a1118542623_29083804',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_6588555622a1118542623_29083804 */
if (!function_exists('smarty_template_function_renderLogo_6588555622a1118542623_29083804')) {
function smarty_template_function_renderLogo_6588555622a1118542623_29083804(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_6588555622a1118542623_29083804 */
}
