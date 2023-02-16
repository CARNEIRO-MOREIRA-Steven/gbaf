<?php
require('functions/config.php');
include_once('extensions/header.php');
$check = $conn->prepare("SELECT id_user, username, nom, prenom, password FROM account WHERE username=?");
$result = $check->execute(array($_POST['username']));//On vérifie dans la ce que contient la table accont
if (!$result) {
    echo 'Erreur lors de l\'exécution de la requête : ' . print_r($check->errorInfo(), true);
} else {
    $compte_user = $check->fetch();
    if ($compte_user && password_verify($_POST['password'], $compte_user['password'])) { //On vérifie que les informations sont celles enregistré dans la table
        session_start();
        $_SESSION['utilisateur'] = $_POST['username'];
        $_SESSION['id_user'] = $compte_user['id_user'];
        $_SESSION['nom'] = $compte_user['nom'];
        $_SESSION['prenom'] = $compte_user['prenom'];
        header('Location:/acceuil.php');
    } else { //Sinon si l'username et le password est incorrect message d'erreur
        echo "<div class='bad_user'>Nom d'utilisateur ou mot de passe incorrect <br> <button id='retour' onclick=window.location.href='acceuil.php'>Retour</button></div>";
    }
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