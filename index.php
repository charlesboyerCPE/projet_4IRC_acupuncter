<?php
session_start();

require_once('./controller/controller.php');

$action = isset($_GET['action']) ? $_GET['action'] : NULL;

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
elseif($action=="listepatho"){
    getlistepatho();
} 
else{
    home();
}