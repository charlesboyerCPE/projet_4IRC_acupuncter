<?php
    class User
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