<?php 
//On crée les variables nécessaires à la connexion à la BDD
$servername = "localhost";
$username = "Squaad6z";
$password = "Spirit2011";
$dbname = "gbaf2";

try {
    //On se connecte à la BDD
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8",$username, $password);

    //On définit le mode exception d'erreur PDO 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

//Message d'erreur si exception d'erreur
catch(PDOException $e) {
    die('Erreur : '.$e->getMessage());
}
?>
