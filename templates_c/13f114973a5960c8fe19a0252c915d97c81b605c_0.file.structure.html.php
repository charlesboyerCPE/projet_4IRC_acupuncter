<?php
/* Smarty version 3.1.39, created on 2021-09-30 14:21:26
  from 'C:\wamp64\www\projet_4IRC_acupuncter\templates\structure.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155c7e65274f0_01056379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f114973a5960c8fe19a0252c915d97c81b605c' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\templates\\structure.html',
      1 => 1633011582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.html' => 1,
  ),
),false)) {
function content_6155c7e65274f0_01056379 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Acuponcture | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/index.css">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
  <?php $_smarty_tpl->_subTemplateRender("file:./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container body-filter"><?php }
}
