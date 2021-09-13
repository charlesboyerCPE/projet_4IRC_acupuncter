<?php
/* Smarty version 3.1.39, created on 2021-09-13 13:33:46
  from 'C:\wamp64\www\projet_4IRC_acupuncter\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f533a572220_91777730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edd140525a4e0d066709854038bdbe7ac50373e2' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\register.html',
      1 => 1631539966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:structure.html' => 1,
  ),
),false)) {
function content_613f533a572220_91777730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Inscrivez'-'vous'), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1194709810613f533a570496_61532733', 'body');
}
/* {block 'body'} */
class Block_1194709810613f533a570496_61532733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1194709810613f533a570496_61532733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
    <form>
        <div class="form-group">    
            <div class="mb-3">
                <label class="noir" for="firstName">Nom</label>
                <input id="firstName" class="form-control" required="" type="text" value="" placeholder="Nom" />
                <div class="invalid-feedback">Un nom valide est requis.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label class="noir" for="lastName">Prénom</label>
                <input id="lastName" class="form-control" required="" type="text" value="" placeholder="Prénom" />
                <div class="invalid-feedback">Un nom valide est requis.</div>
            </div>
        </div>   
        <div class="form-group">
            <div class="mb-3">
                <label class="noir" for="Email">Adresse mail</label>
                <input type="email" class="form-control" id=Email" aria-describedby="emailHelp" placeholder="Adresse mail">
                <div class="invalid-feedback">Un email valide est requis.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label class="noir" for="Password">Entrez votre mot de passe</label>
                <input type="password" class="form-control" id="Password" placeholder="●●●●●●●●">
                <div class="invalid-feedback">Un mot de passe est requis.</div>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label class="noir" for="ConfimePassword">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="ConfimePassword" placeholder="●●●●●●●●">
                <div class="invalid-feedback">La confirmation du mot de passe est requise.</div>
            </div>
        </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
    </form>
<?php
}
}
/* {/block 'body'} */
}
