<?php
require('functions/config.php');
$check = $conn->prepare("SELECT id_user, username, password FROM account WHERE username=?");
$result = $check->execute(array($_POST['username']));
if (!$result) {
    echo 'Erreur lors de l\'exécution de la requête : ' . print_r($check->errorInfo(), true);
} else {
    $compte_user = $check->fetch();
    if ($compte_user && password_verify($_POST['password'], $compte_user['password'])) {
        session_start();
        $_SESSION['utilisateur'] = $_POST['username'];
        $_SESSION['id_user'] = $compte_user['id_user'];
        header('Location:/acceuil.php');
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect <br> <a href='index.php'>Retour à la page d'accueil</a>";
    }
}
?>