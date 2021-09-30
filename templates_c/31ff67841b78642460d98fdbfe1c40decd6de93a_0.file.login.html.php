<?php
/* Smarty version 3.1.39, created on 2021-09-30 13:52:19
  from '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/views/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155a4f3451e90_44043539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ff67841b78642460d98fdbfe1c40decd6de93a' => 
    array (
      0 => '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/views/login.html',
      1 => 1633001798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
function content_6155a4f3451e90_44043539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Connectez-vous"), 0, false);
?>
    
    <div class="row align-middle">
        <div class="col">
            <br><br>
            <h1 class="text-center">Connexion</h1>
            <br>
        </div>
    </div>
    <form method="POST" action="./index.php?action=postlogin">
        <fieldset> 
        <div class="row align-items-center">
            <div class="col">
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Adresse mail" class="noir" for="Email">Adresse mail</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Adresse mail" name="email_user">
                        <div class="invalid-feedback">Un email valide est requis.</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Mot de passe" class="noir" for="Password">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="Password" placeholder="●●●●●●●●●" name="password_user">
                        <div class="invalid-feedback">Un mot de passe est requis.</div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Se connecter</button>
            </div>
        </div>
        </fieldset>
    </form>
    
  </div>
</body>
</html><?php }
}
