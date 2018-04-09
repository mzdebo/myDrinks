<?php
/* Smarty version 3.1.30, created on 2018-04-07 13:25:18
  from "E:\XAMPP\htdocs\projects\myDrinks\tpl\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8aa9e707982_49359405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b501873920deebdfe200daf115817c3ad98c568e' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projects\\myDrinks\\tpl\\main.tpl',
      1 => 1523100313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac8aa9e707982_49359405 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Drinks</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/searchDrinks.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link href="css/login_signup.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php echo '<script'; ?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/displayscript.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/displaySearch.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/ajaxdrinks.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
