<?php
/* Smarty version 3.1.39, created on 2021-09-13 14:14:34
  from 'C:\wamp64\www\projet_4IRC_acupuncter\templates\nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f5ccab8bdc4_55320439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a762ee0da0478314e143b3c10c67f85be9f06b46' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\templates\\nav.html',
      1 => 1631542469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613f5ccab8bdc4_55320439 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php?action=accueil">Acuponcture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=accueil">Accueil
                <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
        <form class="d-flex">
        <!-- Si Connecté -->
            <button name="Mon compte" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button"><!-- Nom / prénom user --></button>
            <button name="Déconnexion" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">Se déconnecter</button>
             
            <a href="index.php?action=login"><button name="Connexion" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">Se connecter</button></a>
             <button name="Inscription"class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">S'incrire</button>
        </form>
    </div>
    </div>
 </nav><?php }
}
