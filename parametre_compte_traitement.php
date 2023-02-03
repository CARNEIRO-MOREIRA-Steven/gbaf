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