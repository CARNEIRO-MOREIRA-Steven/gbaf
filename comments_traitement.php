<?php
require_once('functions/config.php');
require_once('functions/auth.php');

try {
  $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8",$username, $password);
} catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}

$id_user = $_SESSION['id_user'];
$id_acteur = isset($_POST['id_acteur']) ? $_POST['id_acteur'] : 0;

$stmt = $bdd->prepare("SELECT * FROM post WHERE id_user = :id_user AND id_acteur = :id_acteur");
$stmt->bindValue(':id_user', $id_user);
$stmt->bindValue(':id_acteur', $id_acteur);
$stmt->execute();

$existingPost = $stmt->fetch(PDO::FETCH_ASSOC);

if($existingPost) {
  die("Vous avez déjà publié un commentaire pour cet acteur.");
} else {

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