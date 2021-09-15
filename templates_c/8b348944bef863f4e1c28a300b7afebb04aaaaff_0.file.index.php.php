<?php
/* Smarty version 3.1.39, created on 2021-09-15 03:14:42
  from 'C:\wamp64\www\projet_4IRC_acupuncter\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6141652216b9d5_98450094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b348944bef863f4e1c28a300b7afebb04aaaaff' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\index.php',
      1 => 1631674383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6141652216b9d5_98450094 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
session_start();

require_once('./controller/controller.php');

$action = $_GET['action'];

if($action=="getlogin"){
    getlogin();
}
elseif($action=="postlogin"){
    postlogin();
}
elseif($action=="getregister"){
    getregister();
}
elseif($action=="postregister"){
    postregister();
}
elseif($action=="logout"){
    logout();
} 
else{
    accueil();
}<?php }
}
