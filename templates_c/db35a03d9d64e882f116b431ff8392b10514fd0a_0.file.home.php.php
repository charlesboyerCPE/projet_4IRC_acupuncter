<?php
/* Smarty version 3.1.39, created on 2021-09-13 20:15:42
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613fb16e759ac3_81649518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db35a03d9d64e882f116b431ff8392b10514fd0a' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\home.php',
      1 => 1631534619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613fb16e759ac3_81649518 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>
error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $title = "Page d'accueil";
    $content = 'test yoooo';
    
    echo $reponse;

    while ($listePatho = $reponse->fetch())
    {
    <?php echo '?>';?>

      <p>BONSOIR</p>
      <p>
        <strong>id</strong> : <?php echo '<?php ';?>
echo $listePatho['id']; <?php echo '?>';?>
<br />
        mer : <?php echo '<?php ';?>
echo $listePatho['mer']; <?php echo '?>';?>
<br />
        type:  <?php echo '<?php ';?>
echo $listePatho['type']; <?php echo '?>';?>
<br />
        desc: <?php echo '<?php ';?>
echo $listePatho['desc']; <?php echo '?>';?>
<br />
      </p>
    <?php echo '<?php
    ';?>
}

require_once('./layouts/structure.php');<?php }
}
