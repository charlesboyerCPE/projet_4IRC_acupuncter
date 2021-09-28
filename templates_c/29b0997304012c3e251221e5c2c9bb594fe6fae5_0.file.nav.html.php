<?php
/* Smarty version 3.1.39, created on 2021-09-27 13:56:51
  from '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/templates/nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6151b183909819_70980044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b0997304012c3e251221e5c2c9bb594fe6fae5' => 
    array (
      0 => '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/templates/nav.html',
      1 => 1632743111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6151b183909819_70980044 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Acuponcture</a>
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
            <?php if ((isset($_SESSION['id_user']))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recherchez</a>
                </li>
            <?php }?>
        </ul>
        <form class="d-flex">
            <?php if ((isset($_SESSION['id_user']))) {?>
                <button name="Mon compte" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button"><?php echo $_SESSION['fname_user'];?>
 <?php echo $_SESSION['lname_user'];?>
</button>
                <a href="index.php?action=logout"><button name="Déconnexion" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">Se déconnecter</button></a>
            <?php } else { ?>
                <a href="index.php?action=getlogin"><button name="Connexion" class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">Se connecter</button></a>
                <a href="index.php?action=getregister"><button name="Inscription"class="btn btn-dark my-2 my-sm-2 mx-sm-1" type="button">S'inscrire</button></a>
            <?php }?>
        </form>
    </div>
    </div>
 </nav><?php }
}
