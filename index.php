<?php
session_start();

require_once('./controller/controller.php');

$action = $_GET['action'];

if(!$action || $action=="accueil"){
    accueil();
}
if($action=="login"){
    login();
}
if($action=="register"){
    $smarty->display('./views/register.html');
}
