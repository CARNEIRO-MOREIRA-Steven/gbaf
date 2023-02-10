<?php
require_once('functions/config.php');
require_once('functions/auth.php');

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
  echo 'Vous avez déjà voté pour cet acteur.';
} else {
  // Enregistrement du nouveau vote
  $stmt = $bdd->prepare('INSERT INTO vote (id_user, id_acteur, vote) VALUES (:id_user, :id_acteur, :vote)');
  $stmt->execute(array(
    ':id_user' => $id_user,
    ':id_acteur' => $id_acteur,
    ':vote' => $vote
  ));
}
  // Mise à jour du nombre de votes