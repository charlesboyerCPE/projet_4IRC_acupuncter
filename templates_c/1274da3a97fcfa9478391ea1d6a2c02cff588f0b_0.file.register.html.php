<?php
/* Smarty version 3.1.39, created on 2021-09-30 13:50:18
  from '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/views/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155a47a9df4c0_97736404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1274da3a97fcfa9478391ea1d6a2c02cff588f0b' => 
    array (
      0 => '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/views/register.html',
      1 => 1633001798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
function content_6155a47a9df4c0_97736404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Inscrivez-vous"), 0, false);
?>

    <div class="row align-items-start">
        <div class="col">
            <br><br>
            <h1 class="text-center">Création d'un compte</h1>
            <br>
        </div>
    </div>
    <div class="row align-items-center" >
        <div class="col">
    <form method="POST" action="./index.php?action=postregister">
        <div class="form-group">    
            <div class="mb-3">
                <label name="Nom" class="noir" for="firstName">Nom</label>
                <input id="firstName" class="form-control" required="" type="text" value="" placeholder="Nom" name="fname_user"/>
                <div class="invalid-feedback">Un nom valide est requis.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label name="Prénom" class="noir" for="lastName">Prénom</label>
                <input id="lastName" class="form-control" required="" type="text" value="" placeholder="Prénom" name="lname_user" />
                <div class="invalid-feedback">Un nom valide est requis.</div>
            </div>
        </div>   
        <div class="form-group">
            <div class="mb-3">
                <label name="Adresse mail" class="noir" for="Email">Adresse mail</label>
                <input type="email" class="form-control" id="Email" required="" aria-describedby="emailHelp" placeholder="Adresse mail" name="email_user">
                <div class="invalid-feedback">Un email valide est requis.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label name="Mot de passe" class="noir" for="Password">Entrez votre mot de passe</label>
                <input type="password" class="form-control" id="Password" required="" placeholder="●●●●●●●●" name="password_user">
                <div class="invalid-feedback">Un mot de passe est requis.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label name="Confirmation du mot de passe" class="noir" for="ConfimePassword">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="ConfimePassword" required="" placeholder="●●●●●●●●" name="password_user2">
                <div class="invalid-feedback">La confirmation du mot de passe est requise.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <input class="form-check-input noir" type="checkbox" value="" id="flexCheckDefault" name="Accepter offres commerciales">
                <label name="Accepter de recevoir les offres commerciales par mail" class="form-check-label noir" for="flexCheckDefault">
                   J'accepte de recevoir des informations et des offres commerciales de la part de Acupuncture CPE LYON ! par e-mail.
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="mb-3">
                <input class="form-check-input noir" type="checkbox" value="" required="" id="flexCheckChecked" name="policies">
                <label name="Accepter les politique de données personnelles" class="form-check-label noir" for="flexCheckChecked">
                  En créant mon compte, je certifie avoir pris connaissance de notre <a href="https://policies.google.com/privacy?hl=fr-CA" target="_blank" class="noir"> Politique de données personnelles*</a>
                </label>
            </div>
        </div>
        
        </div>
        <div class="mb-3">
            <button name="Valider l'inscription" type="submit" class="btn btn-dark">Validez l'inscription</button>
        </div>
    </div>
    </form>

  </div>
</body>
</html><?php }
}
