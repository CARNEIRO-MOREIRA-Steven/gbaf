<?php
require('config.php');
session_start();

// Vérifiez l'authentification de l'utilisateur
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Récupérez les informations actuelles de l'utilisateur de la base de données
$username = $_SESSION['username'];
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
    echo '<div>Mise à jour réussie !</div>';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètre du compte</title>
    <link href="css/style.css" rel="stylesheet">
</head>
    <body>
    <?php include('extensions/header.php');
?>
    <form method="get" action="">
        <fieldset>
        <legend>Modifier vos informations</legend>
        <label>Nom</label> : <input type="text" name="nom" value="<?php echo $_user['nom'];?>"><br>
        <label>Prenom</label> : <input type="text" name="prenom" value="<?php echo $_user['prenom'];?>"><br>
        <label>Username</label> : <input type="text" name="username"value="<?php echo $_user['username'];?>"><br>
        <label>Password</label> : <input type="text" name="password"value="<?php echo $_user['password'];?>"><br>
        <label>Question secrète</label> : 
<select name="my_html_select_box"value="<?php echo $_user['question'];?>">
	<option>Nom de votre père</option>
	<option>Nom de votre animal de compagnie</option>
	<option>Ville de naissance</option>
</select>
        <label>Réponse</label> : <input type="text" name="reponse"value="<?php echo $_user['reponse'];?>"><br></p>
        <input type="submit" value="Modifier">