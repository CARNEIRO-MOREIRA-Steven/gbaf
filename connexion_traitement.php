<?php
session_start();

require('config.php');
$check = $conn->prepare("SELECT username, password FROM account WHERE username=?");
$result = $check->execute(array($_POST['username']));
if (!$result) {
    echo 'Erreur lors de l\'exécution de la requête : ' . print_r($check->errorInfo(), true);
} else {
    $compte_user = $check->fetch();
    if ($compte_user && password_verify($_POST['password'], $compte_user['password'])) {
        header('Location:/acceuil.php');
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect <br> <a href='index.php'>Retour à la page d'accueil</a>";
    }
}
?>