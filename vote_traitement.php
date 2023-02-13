<?php
require_once('functions/config.php');
require_once('functions/auth.php');
include_once('extensions/header.php');
try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8",$username, $password);
  } catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
  }
// Récupération des données du formulaire
$id_user = $_SESSION['id_user'];
$id_acteur = $_POST['id_acteur'];
$vote = $_POST['vote'];


// Vérification si l'utilisateur a déjà voté pour l'acteur
$stmt = $bdd->prepare('SELECT * FROM vote WHERE id_user = :id_user AND id_acteur = :id_acteur');
$stmt->execute(array(
  ':id_user' => $id_user,
  ':id_acteur' => $id_acteur
));
$result = $stmt->fetch();

if ($result) {
  // Affichage d'un message d'erreur si l'utilisateur a déjà voté
  echo "<div class ='already_vote'>Vous avez déjà voté pour cet acteur.<br/><button id='retour' onclick=window.location.href='acceuil.php'>Retour</button></div>";
} else {
  // Enregistrement du nouveau vote
  $stmt = $bdd->prepare('INSERT INTO vote (id_user, id_acteur, vote) VALUES (:id_user, :id_acteur, :vote)');
  $stmt->execute(array(
    ':id_user' => $id_user,
    ':id_acteur' => $id_acteur,
    ':vote' => $vote
  ));
  header('Location: organisme.php?id=' . $id_acteur);
    exit;
}
  // Mise à jour du nombre de votes
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