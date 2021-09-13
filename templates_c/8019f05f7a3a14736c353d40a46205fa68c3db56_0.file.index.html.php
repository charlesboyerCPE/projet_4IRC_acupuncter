<?php
/* Smarty version 3.1.39, created on 2021-09-13 13:41:23
  from 'C:\wamp64\www\projet_4IRC_acupuncter\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f5503b43627_23616189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8019f05f7a3a14736c353d40a46205fa68c3db56' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\index.html',
      1 => 1631540470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:structure.html' => 1,
  ),
),false)) {
function content_613f5503b43627_23616189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Accueil"), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_501187368613f5503b3e216_01661150', 'body');
}
/* {block 'body'} */
class Block_501187368613f5503b3e216_01661150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_501187368613f5503b3e216_01661150',
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
