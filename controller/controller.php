<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once ('./libs/Smarty.class.php');
require_once ('models/acupuncter.php');

function home(){
  $smarty = new Smarty;
  $smarty->display('./views/index.html');
}

function getlogin(){
  $smarty = new Smarty;
  $smarty->display('./views/login.html');
}

function postlogin(){
  $email_user=$_POST['email_user'];
	$password_user=$_POST['password_user'];

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