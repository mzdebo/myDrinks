<?php
/* Smarty version 3.1.30, created on 2018-04-08 14:16:36
  from "E:\XAMPP\htdocs\projects\myDrinks\tpl\drinkList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aca08240a4d22_28471026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23bcfb067ec07ed9b5941195b0231feda0a93166' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projects\\myDrinks\\tpl\\drinkList.tpl',
      1 => 1523189777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca08240a4d22_28471026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['drinks']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <h3 id="<?php echo $_smarty_tpl->tpl_vars['item']->value['idDrink'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['strDrink'];?>
</h3>
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['strDrinkThumb'];?>
" style="height: 360px" width="auto">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
