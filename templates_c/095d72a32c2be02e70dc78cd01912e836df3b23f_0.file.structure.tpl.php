<?php
/* Smarty version 3.1.39, created on 2021-09-13 13:16:06
  from 'C:\wamp64\www\projet_4IRC_acupuncter\structure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f4f163f83a9_07987674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '095d72a32c2be02e70dc78cd01912e836df3b23f' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\structure.tpl',
      1 => 1631538931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613f4f163f83a9_07987674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Acuponcture | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
  <div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_809231596613f4f163f2c86_54158836', 'body');
?>

  </div>
</body>
</html><?php }
/* {block 'body'} */
class Block_809231596613f4f163f2c86_54158836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_809231596613f4f163f2c86_54158836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
