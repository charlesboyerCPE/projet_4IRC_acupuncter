<?php
require_once ('./libs/Smarty.class.php');

function accueil(){
  $smarty = new Smarty;
  $smarty->display('./views/index.html');
}

function login(){
  $smarty = new Smarty;
  $smarty->display('./views/login.html');
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