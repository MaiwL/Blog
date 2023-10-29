<?php

// Informations de CONNEXION à la BDD

$username = "root";
$password = "";

// CONNEXION à la BDD

try{
    $db = new PDO("mysql:host=localhost;dbname=marvel", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Défini l'encode des caractères

    $db->exec("SET NAMES 'utf8'");
}catch(PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    die();
}
?>