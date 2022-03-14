<?php
/* Smarty version 3.1.43, created on 2022-03-14 15:00:23
  from '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622f4a778b23e1_66203569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dedfe4ba9a5299bec8ff7ab409976af40dc02f2' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/index.tpl',
      1 => 1647266055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622f4a778b23e1_66203569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_624492589622f4a778b0707_84126368', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1301482073622f4a778b0b74_02740978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_902097069622f4a778b1561_08338292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_788870829622f4a778b1226_86027809 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902097069622f4a778b1561_08338292', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_624492589622f4a778b0707_84126368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_624492589622f4a778b0707_84126368',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1301482073622f4a778b0b74_02740978',
  ),
  'page_content' => 
  array (
    0 => 'Block_788870829622f4a778b1226_86027809',
  ),
  'hook_home' => 
  array (
    0 => 'Block_902097069622f4a778b1561_08338292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1301482073622f4a778b0b74_02740978', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788870829622f4a778b1226_86027809', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
