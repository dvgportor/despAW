<?php
/* Smarty version 3.1.43, created on 2022-03-14 15:00:23
  from '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622f4a778ba589_15941661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f945b1377b4479ce775d03aa84d0c01be23168b4' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/themes/classic/templates/page.tpl',
      1 => 1647266055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622f4a778ba589_15941661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_809374547622f4a778b7079_78075835', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1951045971622f4a778b7837_18821233 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_760868548622f4a778b7413_44406224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951045971622f4a778b7837_18821233', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1414111900622f4a778b8934_75624202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2145703556622f4a778b90c8_88700959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_946384100622f4a778b85b5_52363555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414111900622f4a778b8934_75624202', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2145703556622f4a778b90c8_88700959', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_917838661622f4a778b9b93_41994313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_812539149622f4a778b9869_37515814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917838661622f4a778b9b93_41994313', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_809374547622f4a778b7079_78075835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_809374547622f4a778b7079_78075835',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_760868548622f4a778b7413_44406224',
  ),
  'page_title' => 
  array (
    0 => 'Block_1951045971622f4a778b7837_18821233',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_946384100622f4a778b85b5_52363555',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1414111900622f4a778b8934_75624202',
  ),
  'page_content' => 
  array (
    0 => 'Block_2145703556622f4a778b90c8_88700959',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_812539149622f4a778b9869_37515814',
  ),
  'page_footer' => 
  array (
    0 => 'Block_917838661622f4a778b9b93_41994313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_760868548622f4a778b7413_44406224', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_946384100622f4a778b85b5_52363555', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_812539149622f4a778b9869_37515814', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
