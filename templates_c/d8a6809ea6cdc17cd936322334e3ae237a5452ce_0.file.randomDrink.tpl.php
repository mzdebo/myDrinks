<?php
/* Smarty version 3.1.30, created on 2018-04-06 13:47:18
  from "C:\xampp\htdocs\projects\myDirnks\tpl\randomDrink.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac75e46276da8_97471658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a6809ea6cdc17cd936322334e3ae237a5452ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\myDirnks\\tpl\\randomDrink.tpl',
      1 => 1523015229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac75e46276da8_97471658 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
    <h3><?php echo $_smarty_tpl->tpl_vars['alcoholic']->value;?>
</h3>
    <h3>Ingredients:</h3>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['ingredients']->value;?>

    </ul>
    <h3> prefered Glas: <?php echo $_smarty_tpl->tpl_vars['glas']->value;?>
</h3>
    <h3>Instructions</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['instructions']->value;?>
</p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" style="height: 360px" width="auto">
</div><?php }
}
