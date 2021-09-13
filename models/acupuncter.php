<?php
    // Connexion à la base de données
    try {
        $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '');

    } catch (PDOException $e) {
        echo $e->getCode() . ' ' . $e->getMessage();
    }
?>

<?php

    // Classe gérant le dialogue avec la base de données
    class Acupuncter
    {
        private $_db;
        private $_patho;

        // Constructeur par défaut de la classe Acupuncter.
        public function __construct()
        {
            $this->_db = NULL;
            $this->_patho = NULL;
        }

        // Méthode permettant de se connecter à la base de données
        public function connect()
        {
            try 
            {
                $this->_db = new PDO('mysql:host=localhost;dbname=acu', 'root', '');
        
            } catch (PDOException $e) 
            {
                echo $e->getCode() . ' ' . $e->getMessage();
            }
        }

        // Méthode permettant de fermer la connexion à la base de données
        public function close()
        {}

        // Méthode permettant d'obtenir la liste des pathologies présente dans la base de données
        public function obtenirPatho()
        {
            $listePatho = [];

            // Préparation de la requête
            $sql = "SELECT * FROM patho";
            $query = $this->db->prepare($sql);

            // Envoi de la requête
            $query->execute();

            return $listePatho;
        }

        // Méthode retournant l'attribut _patho de la classe Acupuncter
        public function get_patho()
        {
            return $this->_patho;
        }
    }
?>