<?php
session_start();

require('config.php');

if (!empty($_POST)) {
    $check = $conn->prepare("SELECT username, password FROM account WHERE username=?");
    $check->execute(array($_POST['username']));
    $compte_user = $check->fetch();

    if ($compte_user && password_verify($_POST['password'], $compte_user['password'])) {
        $_SESSION['username'] = $compte_user['username'];
        header('Location: acceuil.php');
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect <br> <a href='index.php'>Retour à la page d'accueil</a>";
    }
}
?>