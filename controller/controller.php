<?php
/* error_reporting(E_ALL);
ini_set("display_errors", 1); */

require_once ('./libs/Smarty.class.php');
require_once ('models/acupuncter.php');
require_once ('models/pathologies.php');


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

  $liste = new Pathologies;
  $listepathos=$liste->listepatho($filter_1,$filter_2);
  $listemers=$liste->listemers();
  $listetpathos=$liste->listetpatho();

  $smarty = new Smarty;
  $smarty->assign('pathos', $listepathos);
  $smarty->assign('mers', $listemers);
  $smarty->assign('dmers', $filter_1);
  $smarty->assign('tpathos', $listetpathos);
  $smarty->assign('dtpathos', $filter_2);
  $smarty->display('./views/liste-patho.html');
}

function postlogin(){
  $email_user=htmlspecialchars($_POST['email_user']);
	$password_user=htmlspecialchars($_POST['password_user']);

  $connect = new Acupuncter;
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
function information(){
  $smarty = new Smarty;
  $smarty->display('./views/index.html');
}

function bienfaits(){
  $smarty = new Smarty;
  $smarty->display('./views/index.html#Les bienfaits');
}

function location(){
  $smarty = new Smarty;
  $smarty->display('./views/index.html#Nous trouver');
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

  

  $connect = new Acupuncter;
  $connect->register($email_user,$password_user,$password_user2,$fname_user,$lname_user,$commerciales);

  /*$connect = new Acupuncter;
  $connect->login($email_user,$password_user);*/


  /*$smarty = new Smarty;
  $smarty->display('./views/index.html');*/
}


/*   error_reporting(E_ALL);
  ini_set("display_errors", 1);
  // function index() {
  include('../models/acupuncter.php');
  $acu = new Acupuncter();
  $acu->connect();
  $acu->obtenirPatho();
  // RÃ©cuperation de la liste des pathologies
  $sql = "SELECT * FROM patho";
  $query = $this->db->prepare($sql);
  $query->execute();
  $listePatho = $query->fetchAll();
  $this->loadView('../views/home.php', $listePatho);
  // include('../views/home.php');
  // }
?> */