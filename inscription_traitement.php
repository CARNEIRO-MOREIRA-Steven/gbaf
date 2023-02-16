<?php
require('functions/config.php');
include_once('extensions/header.php');
$check = $conn->prepare("SELECT nom, prenom, username FROM account WHERE username=?"); //On prépare la table account 
$check->execute(array($_POST['username']));
$compte_user = $check->fetchAll();
//On vérifie que l'username n'est pas déjà utilisé
 
if(count($compte_user)>0){//Si l'username existe déjà message d'erreur
    echo "<div class='username_used'>Cette Username est déjà utilisé <br> <a href='inscription.php'> Retour au formulaire d'inscription </a></div>";
}else{//Sinon on enregistre les informations dans la BDD
    $sql =$conn-> prepare('INSERT INTO account(nom , prenom, username, password, question, reponse) VALUES (?, ?, ?, ?, ?, ?)');
    $sql->execute(array(strip_tags($_POST['nom']), strip_tags($_POST['prenom']), strip_tags($_POST['username']), password_hash($_POST['password'], PASSWORD_DEFAULT), implode([$_POST['question']]), strip_tags($_POST['reponse'])));
echo "<div class='update_inscription'> Inscription réussie !<br> <a href='connexion.php'>Connectez-vous</a</div>";//Validation de l'inscription
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="css/traitement.css" rel="stylesheet">
</head>