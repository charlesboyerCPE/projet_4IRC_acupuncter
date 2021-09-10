<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $title = "Page d'accueil";
    $content = 'test yoooo';
    
    echo $reponse;

    while ($listePatho = $reponse->fetch())
    {
    ?>
      <p>BONSOIR</p>
      <p>
        <strong>id</strong> : <?php echo $listePatho['id']; ?><br />
        mer : <?php echo $listePatho['mer']; ?><br />
        type:  <?php echo $listePatho['type']; ?><br />
        desc: <?php echo $listePatho['desc']; ?><br />
      </p>
    <?php
    }

require_once('./layouts/structure.php');