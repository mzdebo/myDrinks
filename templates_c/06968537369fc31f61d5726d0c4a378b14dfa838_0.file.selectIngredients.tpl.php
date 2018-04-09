<?php
/* Smarty version 3.1.30, created on 2018-04-08 13:39:22
  from "E:\XAMPP\htdocs\projects\myDrinks\tpl\selectIngredients.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac9ff6a0f4745_37425230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06968537369fc31f61d5726d0c4a378b14dfa838' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projects\\myDrinks\\tpl\\selectIngredients.tpl',
      1 => 1523187416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac9ff6a0f4745_37425230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <form method="post" action="index.php?page=drinks">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingredients']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <input type="checkbox" id="iid_<?php echo $_smarty_tpl->tpl_vars['item']->value['strIngredient1'];?>
" name="ingredients[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['strIngredient1'];?>
">
            <label for="iid_<?php echo $_smarty_tpl->tpl_vars['item']->value['strIngredient1'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['strIngredient1'];?>
</label>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <input type="submit">
    </form>
</div><?php }
}
