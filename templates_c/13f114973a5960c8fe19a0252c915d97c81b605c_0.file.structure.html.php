<?php
/* Smarty version 3.1.39, created on 2021-09-13 14:18:57
  from 'C:\wamp64\www\projet_4IRC_acupuncter\templates\structure.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f5dd18704b6_87324011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f114973a5960c8fe19a0252c915d97c81b605c' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\templates\\structure.html',
      1 => 1631542577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.html' => 1,
  ),
),false)) {
function content_613f5dd18704b6_87324011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Acuponcture | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <?php $_smarty_tpl->_subTemplateRender("file:./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998371424613f5dd186e1a0_68502829', 'body');
?>

  </div>
</body>
</html><?php }
/* {block 'body'} */
class Block_1998371424613f5dd186e1a0_68502829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1998371424613f5dd186e1a0_68502829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
