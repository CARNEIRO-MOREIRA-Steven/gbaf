<?php
include_once('extensions/header.php');
require('functions/config.php');

// Récupérez les informations actuelles de l'utilisateur de la base de données
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
$stmt = $conn->prepare('SELECT nom, prenom, username, password, question, reponse FROM Account WHERE username = ?');
$stmt->execute(array($username));
$user = $stmt->fetch();

// Traitement des mises à jour
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $question = implode([$_POST['question']]);
    $reponse = strip_tags($_POST['reponse']);
    
    $update = $conn->prepare('UPDATE Account SET nom = ?, prenom = ?, password = ?, question = ?, reponse = ? WHERE username = ?');
    $update->execute(array($nom, $prenom, $password, $question, $reponse, $username));
    
    // Confirmation de la mise à jour
    echo "<div class='update_succes'>Mise à jour réussie !<br> <a href='acceuil.php'>Retour à la page d'accueil</a></div> ";
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