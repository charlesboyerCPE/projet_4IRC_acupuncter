<?php
/* Smarty version 3.1.39, created on 2021-09-13 15:18:45
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f6bd51cce21_39387659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0560685ec9285332b3f7e3da6c91a7950114ac' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\index.html',
      1 => 1631546318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
function content_613f6bd51cce21_39387659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Accueil"), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_944564795613f6bd51cb2f1_69781200', 'body');
}
/* {block 'body'} */
class Block_944564795613f6bd51cb2f1_69781200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_944564795613f6bd51cb2f1_69781200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
      <section id="Acueil">
      <div class="row align-items-start">
          <div class="col">
              <br><br>
              <h1 class="text-center">Acueil : Acupunture CPE LYON</h1>
              <br>
          
          </div>
      </div>
      </section>

      <section id="Information"> <-- inforamtion sur Acupunture fonctionnement + image aiguille... section divisé en deux horizontalement -->
      <div class="row" >
          <div class="col">

          </div>
      </div>
      </section>

      <section id="Les bienfaits"> <-- Fond plein avec icon + compliment et raison de faire des scéances chez nous -->
      <div class="row" >
          <div class="col">

          </div>
      </div>
      </section>
      <section id="Nous trouver"> <-- Coordonée plus carte section divisé horizontalement -->
      <div class="row" >
          <div class="col">

          </div>
      </div>
      </section>

</div>
<?php
}
}
/* {/block 'body'} */
}
