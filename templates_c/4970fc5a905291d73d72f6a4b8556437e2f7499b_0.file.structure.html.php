<?php
/* Smarty version 3.1.39, created on 2021-09-30 13:49:49
  from '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/templates/structure.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155a45d1b3b08_04499695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4970fc5a905291d73d72f6a4b8556437e2f7499b' => 
    array (
      0 => '/home/atma/public_html/4IRC/projet_4IRC_acupuncter/templates/structure.html',
      1 => 1632755060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.html' => 1,
  ),
),false)) {
function content_6155a45d1b3b08_04499695 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Acuponcture | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php $_smarty_tpl->_subTemplateRender("file:./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div id="Accueil" class="container">

<?php }
}
