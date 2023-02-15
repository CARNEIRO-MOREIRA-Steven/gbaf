<?php
session_start();
if(isset($_SESSION['utilisateur'])) {
  header('Location: /acceuil.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<?php include('extensions/header.php');
?>
    <form method="post" action="inscription_traitement.php">
        <fieldset>
        <legend>Vos Coordonnées</legend>
        <label>Nom</label> : <input type="text" name="nom" id="nom" required><br>
        <label>Prenom</label> : <input type="text" name="prenom" id="prenom" required><br>
        <label>Username</label> : <input type="text" name="username" id="username" required><br>
        <label>Password</label> : <input type="password" name="password" id="password" required><br>
        <label>Question secrète</label> : 
<select name="question" id="question-select">
	<option value="père">Nom de votre père</option>
	<option value="animal">Nom de votre animal de compagnie</option>
	<option value="ville">Ville de naissance</option>
</select><br>
        <label>Réponse</label> : <input type="text" name="reponse" id="reponse" required><br>
        <input type="submit" value="S'inscrire">
        <button id="retour" onclick="window.location.href='index.php'">Retour</button>
        </fieldset></form>
</body>
</html>
