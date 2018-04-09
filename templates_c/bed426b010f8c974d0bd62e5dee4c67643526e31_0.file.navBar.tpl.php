<?php
/* Smarty version 3.1.30, created on 2018-04-08 14:05:45
  from "E:\XAMPP\htdocs\projects\myDrinks\tpl\navBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aca05993e38d4_79006425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bed426b010f8c974d0bd62e5dee4c67643526e31' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projects\\myDrinks\\tpl\\navBar.tpl',
      1 => 1523188669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca05993e38d4_79006425 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <ul class="navbar">
        <li class="nav active">
            <a href="index.php">Home</a>
        </li>
        <li class="nav">
            <a href="index.php?page=finder">Cocktail finder</a>
        </li>
        <li class="nav">
            <a href="index.php?page=cocktails">Cocktail</a>
        </li>
        <li class="nav">
            <a href="index.php?page=contact">Forum</a>
        </li>
        <li class="nav">
            <a href="index.php?page=contact">Kontakt</a>
        </li>
        <li class="nav">
            <a href="index.php?page=contact">lexikon</a>
        </li>
        <li>
            <button style="float: right" onclick="document.getElementById('login').style.display='block'" class="sl_btn">Login</button>
        </li>
        <li>
            <button style="float: right" onclick="document.getElementById('signup').style.display='block'" class="sl_btn">Sign Up</button>
        </li>
    </ul>
</div>
<div>
    <div id="login" class="modal">
        <span onclick="document.getElementById('login').style.display='none'" id="closelogin" title="Closed Modal">&times;</span>
        <form class="modal-content animate" method="post">
            <div class="container">

                <label><b>Benutzername</b></label>
                <input type="text" placeholder="Benutzername oder Email" name="user" required>

                <label><b>Passwort</b></label>
                <input type="password" placeholder="Passwort" name="loginPassword" required>
                <!--<input type="hidden" name="">-->
                <button type="submit" id="loginbtn">Login</button>
                <input type="checkbox" checked="checked">remember
            </div>
            <div class="container" style="background-color: #f1f1f1">
                <button type="button" onclick="document.getElementById('login').style.display='none'" id="cancelbtnLogin">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a> </span>
                <input type="hidden" name="action" value="login">
            </div>
        </form>
    </div>
    <div id="signup" class="modal">
        <span onclick="document.getElementById('signup').style.display='none'" id="closesingnup"  title="Close Modal">&times;</span>
        <form class="modal-content animate" method="post" action="/projects/9_phpdummy/index.php">
            <div class="container">
                <label><b>Benutzername</b></label>
                <input type="text" placeholder="Benutzername" name="username" required>

                <label><b>e-mail</b></label>
                <input type="text" placeholder="e-mail" name="email" required>

                <label><b>Passwort</b></label>
                <input type="password" placeholder="Passwort" name="password" required>

                <label><b>Passwort wiederholen</b></label>
                <input type="password" placeholder="Passwort wiederholen" name="repeat-password" required>
                <input type="checkbox" checked="checked">remember

                <input type="hidden" name="action" value="register">

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('signup').style.display='none'" id="cancelbtnSignup">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
