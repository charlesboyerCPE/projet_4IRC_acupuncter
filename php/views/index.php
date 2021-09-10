<?php
    session_start();
    require('../controller/controller.php');
    if($_GET['action']=="login"){
        echo "bastien trop sympa";
    }
    if($_SESSION){
        //recherche();
    }
    else{
        index();
    }