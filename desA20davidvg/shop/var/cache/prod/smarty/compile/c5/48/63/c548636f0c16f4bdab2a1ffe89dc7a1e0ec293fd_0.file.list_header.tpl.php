<?php
/* Smarty version 3.1.43, created on 2022-03-11 19:43:44
  from '/web/a20davidvg.kozow.com/public/shop/admin/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_622ba6708325b1_62393746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c548636f0c16f4bdab2a1ffe89dc7a1e0ec293fd' => 
    array (
      0 => '/web/a20davidvg.kozow.com/public/shop/admin/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1647026968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622ba6708325b1_62393746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1891606559622ba670831f38_55009797', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1891606559622ba670831f38_55009797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1891606559622ba670831f38_55009797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
