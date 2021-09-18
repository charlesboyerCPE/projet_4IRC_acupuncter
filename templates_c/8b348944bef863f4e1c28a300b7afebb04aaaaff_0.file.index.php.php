<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-09-13 20:18:21
=======
/* Smarty version 3.1.39, created on 2021-09-15 03:14:42
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
  from 'C:\wamp64\www\projet_4IRC_acupuncter\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_613fb20df11780_53042837',
=======
  'unifunc' => 'content_6141652216b9d5_98450094',
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b348944bef863f4e1c28a300b7afebb04aaaaff' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\index.php',
<<<<<<< HEAD
      1 => 1631564292,
=======
      1 => 1631674383,
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_613fb20df11780_53042837 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6141652216b9d5_98450094 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
echo '<?php
';?>
session_start();

require_once('./controller/controller.php');

$action = isset($_GET['action']) ? $_GET['action'] : NULL;
echo "--".$action."--";

if($action=="getlogin"){
    getlogin();
}
elseif($action=="postlogin"){
    postlogin();
}
<<<<<<< HEAD
elseif($action=="logout"){
    logout();
}
=======
elseif($action=="getregister"){
    getregister();
}
elseif($action=="postregister"){
    postregister();
}
elseif($action=="logout"){
    logout();
} 
>>>>>>> 630f6fca92290d73f797eac957de571f16ed765f
else{
    home();
}<?php }
}
