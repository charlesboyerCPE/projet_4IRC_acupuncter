<?php
    // Connexion à la base de données
    try {
        $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '');

    } catch (PDOException $e) {
        echo $e->getCode() . ' ' . $e->getMessage();
    }
?>