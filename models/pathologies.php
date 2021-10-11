<?php
    class Pathologies
    {
        public function listepatho($filter_1,$filter_2,$filter_3){
            try{
                $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            }
            catch(PDOException $e) {
                $e->getMessage();
            }

            if($filter_1!=NULL){
                $where_add_1=' AND patho.mer='."'$filter_1'";
            }
            else{
                $where_add_1='';
            }

            if($filter_2!=NULL){
                $where_add_2=' AND patho.type='."'$filter_2'";
            }
            else{
                $where_add_2='';
            }

            if($filter_3!=NULL){
                $where_add_3=' AND patho.idP=symptpatho.idP AND symptpatho.idS=symptome.idS AND symptome.desc LIKE '."'%$filter_3%'";
                $from_add_3=', symptpatho, symptome';

            }
            else{
                $where_add_3='';
                $from_add_3='';
            }
            
            $req = "SELECT patho.desc, meridien.nom FROM patho, meridien $from_add_3 WHERE patho.mer=meridien.code".$where_add_1.$where_add_2.$where_add_3;
            $resp = $db->query($req);
            $listepathos = $resp->fetchAll(PDO::FETCH_CLASS);
            return $listepathos;
        }

        public function listemers(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            }
            catch(PDOException $e) {
                $e->getMessage();
            }

            $req = "SELECT meridien.nom, meridien.code FROM meridien";
            $resp = $db->query($req);
            $listemers = $resp->fetchAll(PDO::FETCH_CLASS);

            return $listemers;
        }

        public function listetpatho(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=acu', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            }
            catch(PDOException $e) {
                $e->getMessage();
            }

            $req = "SELECT DISTINCT(patho.type),patho.desc FROM patho";
            $resp = $db->query($req);
            $listemers = $resp->fetchAll(PDO::FETCH_CLASS);

            return $listemers;
        }
    }
?>