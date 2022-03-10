<?php
/* Smarty version 3.1.43, created on 2022-03-10 15:54:16
  from '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622a111851cf68_51089427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dedfe4ba9a5299bec8ff7ab409976af40dc02f2' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/index.tpl',
      1 => 1646923827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a111851cf68_51089427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260620793622a111851b1c2_17096184', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_938087900622a111851b5d0_45621112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1877544876622a111851bf44_20935264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_806974094622a111851bc06_54291120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1877544876622a111851bf44_20935264', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_260620793622a111851b1c2_17096184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_260620793622a111851b1c2_17096184',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_938087900622a111851b5d0_45621112',
  ),
  'page_content' => 
  array (
    0 => 'Block_806974094622a111851bc06_54291120',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1877544876622a111851bf44_20935264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_938087900622a111851b5d0_45621112', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_806974094622a111851bc06_54291120', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
