<?php
session_start();

require_once ('./libs/Smarty.class.php');
//require('../controller/controller.php');

$smarty = new Smarty;

if(!$_GET['action']){
    $smarty->display('./views/index.html');
}
if($_GET['action']=="login"){
    $smarty->display('./views/login.html');
}
if($_GET['action']=="register"){
    $smarty->display('./views/register.html');
}
