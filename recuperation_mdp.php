<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération mot de passe</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<?php include('extensions/header.php');
?>
<form method="post" action="recuperation_mdp_traitement.php" >
 <fieldset>
            <legend>Réinitialisation mot de passe</legend>
        <label>Username</label> : <input type="text" name="username"id="username" required><br>
        <label>Question secrète</label> : 
        <select name="question" id="question-select">
        <option value="père">Nom de votre père</option>
	    <option value="animal">Nom de votre animal de compagnie</option>
	    <option value="ville">Ville de naissance</option>
</select>
        <label>Réponse</label> : <input type="text" name="reponse" id="reponse" required><br></p>
        <input type="submit" value="Réinitialiser">
        <button id="retour" onclick="window.location.href='index.php'">Retour</button>
 </fieldset>
</form>
</body>
</html>