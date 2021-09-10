<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  // function index() {
    include('../includes/db.php');

    // Récuperation de la liste des pathologies
    $reponse = $db->query('SELECT * FROM patho');

    while ($listePatho = $reponse->fetch())
    {
    ?>
      <p>
        <strong>idP</strong> : <?php echo $listePatho['idP']; ?><br />
        mer : <?php echo $listePatho['mer']; ?><br />
        type:  <?php echo $listePatho['type']; ?><br />
        desc: <?php echo $listePatho['desc']; ?><br />
      </p>
    <?php
    }
    include('../views/home.php');
  // }

?>

