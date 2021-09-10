<?php
    try {
        $user='root';
        $passwd='';
        $db = new PDO('mysql:host=localhost;dbname=acu', $user, $passwd);
        } catch (PDOException $e) {
        echo $e->getCode() . ' ' . $e->getMessage();
        }
?>