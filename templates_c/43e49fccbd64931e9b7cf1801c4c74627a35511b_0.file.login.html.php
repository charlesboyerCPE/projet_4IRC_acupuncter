<?php
/* Smarty version 3.1.39, created on 2021-09-13 14:59:18
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f674601b3c6_72103452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e49fccbd64931e9b7cf1801c4c74627a35511b' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\login.html',
      1 => 1631543952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
function content_613f674601b3c6_72103452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Connectez-vous"), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940776157613f6746019bb2_10381597', 'body');
}
/* {block 'body'} */
class Block_940776157613f6746019bb2_10381597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_940776157613f6746019bb2_10381597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row align-items-start">
        <div class="col">
            <br><br>
            <h1 class="text-center">Connexion</h1>
            <br>
        </div>
    </div>
    <form method="POST" action="./index.php?action=login">
        <fieldset> 
        <div class="row align-items-center">
            <form>
                <div class="col">
                    <div class="form-group">
                            <div class="mb-3">
                                <label name="Adresse mail" class="noir" for="Email">Adresse mail</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Adresse mail">
                                <div class="invalid-feedback">Un email valide est requis.</div>
                            </div>
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
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php
}
}
/* {/block 'body'} */
}
