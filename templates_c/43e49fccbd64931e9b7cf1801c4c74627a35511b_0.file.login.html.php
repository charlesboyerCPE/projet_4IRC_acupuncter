<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-09-13 15:20:40
=======
/* Smarty version 3.1.39, created on 2021-09-15 03:06:16
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_613f6c48415d22_68057085',
=======
  'unifunc' => 'content_614163289cb6f8_93374660',
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e49fccbd64931e9b7cf1801c4c74627a35511b' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\login.html',
<<<<<<< HEAD
      1 => 1631546429,
=======
      1 => 1631675162,
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_613f6c48415d22_68057085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Connectez-vous"), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1616865541613f6c48413247_88758329', 'body');
}
/* {block 'body'} */
class Block_1616865541613f6c48413247_88758329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1616865541613f6c48413247_88758329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
=======
function content_614163289cb6f8_93374660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Connectez-vous"), 0, false);
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
?>
    <div class="row align-items-start">
        <div class="col">
            <br><br>
            <h1 class="text-center">Connexion</h1>
            <br>
        </div>
    </div>
    <form method="POST" action="./index.php?action=postlogin">
        <fieldset> 
        <div class="row align-items-center">
<<<<<<< HEAD
            <form>
                <div class="col">
                    <div class="form-group">
                            <div class="mb-3">
                                <label class="noir" for="Email">Adresse mail</label>
                                <input type="email" class="form-control" id=Email" aria-describedby="emailHelp" placeholder="Adresse mail" name="email_user">
                                <div class="invalid-feedback">Un email valide est requis.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="noir" for="Password">Entrez votre mot de passe</label>
                                <input type="password" class="form-control" id="Password" placeholder="●●●●●●●●" name="password_user">
                                <div class="invalid-feedback">Un mot de passe est requis.</div>
                            </div>
                        </div>
=======
            <div class="col">
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Adresse mail" class="noir" for="Email">Adresse mail</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Adresse mail">
                        <div class="invalid-feedback">Un email valide est requis.</div>
                    </div>
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Mot de passe" class="noir" for="Password">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="Password" placeholder="●●●●●●●●">
                        <div class="invalid-feedback">Un mot de passe est requis.</div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </div>
        </fieldset>
    </form>
    
  </div>
</body>
</html><?php }
}
