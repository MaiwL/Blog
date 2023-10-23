<?php

// Connection Class : Classe abstraite pour pouvoir hérité de la connexion à la BDD.

abstract class DBConnection{
    public function connection(){
        try{
            $db = 'mysql:host=localhost;dbname=Blog;charset=utf8';
            $user = 'root';
            $pass = '';
            $connection = new PDO($db, $user, $pass);
            return $connection;
        }catch(PDOException $e){
            die('Erreur de connexion : '. $e->getMessage());
        }
    }
}

?>