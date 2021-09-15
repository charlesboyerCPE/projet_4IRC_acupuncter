<?php
session_start();

require_once('./controller/controller.php');

$action = $_GET['action'];

if($action=="getlogin"){
    getlogin();
}
elseif($action=="postlogin"){
    postlogin();
}
elseif($action=="getregister"){
    getregister();
}
elseif($action=="postregister"){
    postregister();
}
elseif($action=="logout"){
    logout();
}
else{
    accueil();
}