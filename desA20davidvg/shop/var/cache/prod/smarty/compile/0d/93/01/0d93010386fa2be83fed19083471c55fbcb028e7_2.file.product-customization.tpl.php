<?php
/* Smarty version 3.1.43, created on 2022-03-11 19:43:45
  from '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/catalog/_partials/product-customization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622ba6714cf093_79063760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d93010386fa2be83fed19083471c55fbcb028e7' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/catalog/_partials/product-customization.tpl',
      1 => 1647026970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622ba6714cf093_79063760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section class="product-customization js-product-customization">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <div class="card card-block">
      <p class="h4 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Don\'t forget to save your customization to be able to add to cart','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1202703149622ba6714c6214_25145240', 'product_customization_form');
?>


    </div>
  <?php }?>
</section>
<?php }
/* {block 'product_customization_form'} */
class Block_1202703149622ba6714c6214_25145240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization_form' => 
  array (
    0 => 'Block_1202703149622ba6714c6214_25145240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
          <ul class="clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizations']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
              <li class="product-customization-item">
                <label for="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                  <textarea placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message here','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
" class="product-message" maxlength="250" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
" id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
"></textarea>
                  <small class="float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'250 char. max','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['text'] !== '') {?>
                      <h6 class="customization-message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customization:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                          <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label>
                      </h6>
                  <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['is_customized']) {?>
                    <br>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
                    <a class="remove-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['remove_image_url'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove Image','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                  <?php }?>
                  <span class="custom-file">
                    <span class="js-file-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No selected file','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</span>
                    <input class="file-input js-file-input" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?> type="file" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
" id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
">
                    <button class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
                  </span>
                  <small class="float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'.png .jpg .gif','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small>
                <?php }?>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
          <div class="clearfix">
            <button class="btn btn-primary float-xs-right" type="submit" name="submitCustomizedData"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Customization','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
          </div>
        </form>
      <?php
}
}
/* {/block 'product_customization_form'} */
}
