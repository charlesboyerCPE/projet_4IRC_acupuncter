<?php

  require_once ('./libs/Smarty.class.php');

  require_once ('models/pathologies.php');
  require_once ('models/users.php');

  function home(){
    $smarty = new Smarty;
    $smarty->display('./views/index.html');
  }

  function getlogin(){
    $smarty = new Smarty;
    $smarty->display('./views/login.html');
  }

  function getlistepatho(){
    if(!isset($_POST['mers'])){
      $_POST['mers']='';
    }
    $filter_1=htmlspecialchars($_POST['mers']);

    if(!isset($_POST['tpathos'])){
      $_POST['tpathos']='';
    }
    $filter_2=htmlspecialchars($_POST['tpathos']);

    if(!isset($_POST['tags'])){
      $_POST['tags']='';
      $placeholder_filter_3='Mot-clé';
    }
    else{
      $placeholder_filter_3=$_POST['tags'];
    }
    $filter_3=htmlspecialchars($_POST['tags']);


    $liste = new Pathologies;
    $listepathos=$liste->listepatho($filter_1,$filter_2,$filter_3);
    $listemers=$liste->listemers();
    $listetpathos=$liste->listetpatho();


    $smarty = new Smarty;
    $smarty->assign('pathos', $listepathos);
    $smarty->assign('mers', $listemers);
    $smarty->assign('dmers', $filter_1);
    $smarty->assign('tpathos', $listetpathos);
    $smarty->assign('dtpathos', $filter_2);
    $smarty->assign('tags', $placeholder_filter_3);
    $smarty->display('./views/liste-patho.html');
  }

  function postlogin(){
    $email_user=htmlspecialchars($_POST['email_user']);
    $password_user=htmlspecialchars($_POST['password_user']);

    $connect = new User;
    $connect->login($email_user,$password_user);

    $smarty = new Smarty;
    $smarty->display('./views/index.html');
  }

  function logout(){
    $_SESSION = array();
    session_destroy();
    unset($_SESSION);

    $smarty = new Smarty;
    $smarty->display('./views/index.html');
  }
  
  function getregister(){
    $smarty = new Smarty;
    $smarty->display('./views/register.html');
  }

  function postregister(){

    $email_user=htmlspecialchars($_POST['email_user']);
    $password_user=htmlspecialchars($_POST['password_user']);
    $password_user2=htmlspecialchars($_POST['password_user2']);
    $lname_user=htmlspecialchars($_POST['lname_user']);
    $fname_user=htmlspecialchars($_POST['fname_user']);
    if(isset($_POST['policies'])){
          $policies=htmlspecialchars($_POST['policies']);
    }
    else {
      $policies = null;
    }
    if(isset($_POST['Accepter offres commerciales'])){
          $commerciales=htmlspecialchars($_POST['Accepter offres commerciales']);
    }
    else {
      $commerciales = null;
    }
    
    $connect = new User;
    $connect->register($email_user,$password_user,$password_user2,$fname_user,$lname_user,$commerciales);
  }
?>