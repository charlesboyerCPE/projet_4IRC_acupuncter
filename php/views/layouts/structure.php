<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Acuponcture | <?= $title ?></title>
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<?php
    require('../includes/db.php');
    require('nav.php');
    echo '<div class="container">';
?>
<?= $content ?>
<?php echo '</div>';?>
</body>
</html>