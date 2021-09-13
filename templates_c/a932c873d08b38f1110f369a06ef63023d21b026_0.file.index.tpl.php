<?php
/* Smarty version 3.1.39, created on 2021-09-13 13:16:06
  from 'C:\wamp64\www\projet_4IRC_acupuncter\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f4f163424f0_18873093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a932c873d08b38f1110f369a06ef63023d21b026' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\index.tpl',
      1 => 1631538963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:structure.tpl' => 1,
  ),
),false)) {
function content_613f4f163424f0_18873093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:structure.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Accueil'), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_227658091613f4f1633bac5_25096265', 'body');
}
/* {block 'body'} */
class Block_227658091613f4f1633bac5_25096265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_227658091613f4f1633bac5_25096265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Bonjour, Bienvenue dans Smarty !
<?php
}
}
/* {/block 'body'} */
}
