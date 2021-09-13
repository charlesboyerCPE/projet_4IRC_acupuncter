<?php
/* Smarty version 3.1.39, created on 2021-09-13 13:48:49
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f56c1e42182_30114962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0560685ec9285332b3f7e3da6c91a7950114ac' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\index.html',
      1 => 1631540920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
function content_613f56c1e42182_30114962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Accueil"), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_542247958613f56c1e3ce93_34325742', 'body');
}
/* {block 'body'} */
class Block_542247958613f56c1e3ce93_34325742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_542247958613f56c1e3ce93_34325742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Bonjour, c'est l'accueil !
<?php
}
}
/* {/block 'body'} */
}
