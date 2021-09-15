<?php
/* Smarty version 3.1.39, created on 2021-09-15 03:11:28
  from 'C:\wamp64\www\projet_4IRC_acupuncter\templates\nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614164604abbe9_79793079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a762ee0da0478314e143b3c10c67f85be9f06b46' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\templates\\nav.html',
      1 => 1631675485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614164604abbe9_79793079 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a class="nav-link" href="index.php?action=information">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=bienfaits">Les bienfaits</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="index.php?action=location">Nous trouver</a>
            </li>

        </ul>
        <div class="d-flex">
        <!-- Si Connecté -->

        <?php if (1 == 0) {?>
            <a href="index.php?action=login">            
                <button name="Mon compte" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</button>
            </a>
            <a href="index.php?action=login">
                <button name="Déconnexion" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">Se déconnecter</button>
            </a>
        <?php } else { ?> 
            <a href="index.php?action=getlogin">
                <button name="Connexion" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">Se connecter</button>
            </a>
            <a href="index.php?action=getregister">
             <button name="Inscription"class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">S'incrire</button>
            </a>
        <?php }?>
        </div>
    </div>
    </div>
 </nav><?php }
}
