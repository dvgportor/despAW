<?php
/* Smarty version 3.1.43, created on 2022-03-11 20:56:47
  from '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622ba97f901af1_10210512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dedfe4ba9a5299bec8ff7ab409976af40dc02f2' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/index.tpl',
      1 => 1647026970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622ba97f901af1_10210512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_814806334622ba97f8ffb36_18935740', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_207496129622ba97f8fffe5_91105788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1744863751622ba97f900ab1_35858829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1566015045622ba97f900738_22818554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1744863751622ba97f900ab1_35858829', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_814806334622ba97f8ffb36_18935740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_814806334622ba97f8ffb36_18935740',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_207496129622ba97f8fffe5_91105788',
  ),
  'page_content' => 
  array (
    0 => 'Block_1566015045622ba97f900738_22818554',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1744863751622ba97f900ab1_35858829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207496129622ba97f8fffe5_91105788', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1566015045622ba97f900738_22818554', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
