<?php
require_once('functions/config.php');
require_once('functions/auth.php');
include_once('extensions/header.php');
try { 
  $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8",$username, $password);
} catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}
//On récupère l'id_user et l'id_acteur
$id_user = $_SESSION['id_user'];
$id_acteur = isset($_POST['id_acteur']) ? $_POST['id_acteur'] : 0;
//On prépare la table de la BDD
$stmt = $bdd->prepare("SELECT * FROM post WHERE id_user = :id_user AND id_acteur = :id_acteur");
$stmt->bindValue(':id_user', $id_user);
$stmt->bindValue(':id_acteur', $id_acteur);
$stmt->execute();

$existingPost = $stmt->fetch(PDO::FETCH_ASSOC);

if($existingPost) 
  echo "<div class='already_comment'>Vous avez déjà publié un commentaire pour cet acteur.<br/><button id='retour' onclick=window.location.href='acceuil.php'>Retour</button></div>";
else {
//On enregistre les informations saisie dans le formulaire sur la BDD
  $post = $_POST['post'];
  if(!empty($post)) {
   $date = date('Y-m-d H:i:s');
    $stmt = $bdd->prepare("INSERT INTO post (id_user, id_acteur, date_add, post) VALUES (:id_user, :id_acteur, :date, :post)");
    $stmt->bindValue(':id_user', $id_user);
    $stmt->bindValue(':id_acteur', $id_acteur);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':post', $post);
    $stmt->execute();
   
    header('Location: organisme.php?id=' . $id_acteur);
    exit;
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