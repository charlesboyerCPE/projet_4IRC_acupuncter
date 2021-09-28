<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    class Acupuncter
    {
        public function login($email_user,$password_user){
            try{
                $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(PDOException $e) {
                $e->getMessage();
            }

            $req = "SELECT id_user, fname_user, lname_user, password_user FROM users WHERE email_user = '".$email_user."'";
            $resp = $db->query($req);
            while ($data = $resp->fetch()){
                if (password_verify($password_user, $data['password_user'])) {
                    $_SESSION['id_user']=$data['id_user'];
                    $_SESSION['fname_user']=$data['fname_user'];
                    $_SESSION['lname_user']=$data['lname_user'];
                }
            }
        }


        public function register($email_user,$password_user,$password_user2,$fname_user,$lname_user,$commerciales){
            try{
                $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(PDOException $e){
                $e->getMessage();
            }

            $cyptedpassword_user = password_hash($password_user, PASSWORD_DEFAULT);
            $cyptedpassword_user2 = password_hash($password_user2, PASSWORD_DEFAULT);



            $req = "SELECT id_user FROM users WHERE email_user = '".$email_user."'";
            $resp = $db->query($req);
            $data = $resp->fetch();

            $smarty = new Smarty;
            if($data == null){
                if(password_verify($password_user,$cyptedpassword_user2)){
                    $req = "INSERT INTO users (email_user, password_user, fname_user, lname_user) VALUES ('".$email_user."', '".$cyptedpassword_user."', '".$fname_user."', '".$lname_user."')";
                    $resp = $db->query($req);
                    $_SESSION['id_user']=$data['id_user'];
                    $_SESSION['fname_user']=$data['fname_user'];
                    $_SESSION['lname_user']=$data['lname_user'];
                    
                    $smarty->display('./views/index.html');
                }
                else{
                    $error = "Les mots de passe ne correspondent pas";
                    
                    $smarty->display('./views/register.html');
                }
            }
            else {
                $error = "Cette adresse mail est déjà utilisée";
            } 
            echo $error;
        }
    }
?>


<?php
/*
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
*/?>
