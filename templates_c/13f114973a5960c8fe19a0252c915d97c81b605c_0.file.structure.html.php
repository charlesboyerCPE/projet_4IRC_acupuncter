<?php
/* Smarty version 3.1.39, created on 2021-09-15 03:06:16
  from 'C:\wamp64\www\projet_4IRC_acupuncter\templates\structure.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61416328a051d5_83314576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f114973a5960c8fe19a0252c915d97c81b605c' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\templates\\structure.html',
      1 => 1631675174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.html' => 1,
  ),
),false)) {
function content_61416328a051d5_83314576 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

<?php }
}