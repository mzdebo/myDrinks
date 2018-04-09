<?php
/* Smarty version 3.1.30, created on 2018-04-07 13:05:04
  from "E:\XAMPP\htdocs\projects\myDrinks\tpl\randomDrink.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8a5e0724172_92706690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2b9f29cf86d8271dcbb91ea9eaa27f538b0d7e' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projects\\myDrinks\\tpl\\randomDrink.tpl',
      1 => 1523015230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac8a5e0724172_92706690 (Smarty_Internal_Template $_smarty_tpl) {
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
