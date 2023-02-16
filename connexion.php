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
    <title>Page de connexion</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<?php include('extensions/header.php');
?>
    <form method="post" action="connexion_traitement.php" >
        <fieldset> <!-- Formulaire de connexion-->
            <legend>Se connecter</legend>
        <label>Username</label> : <input type="text" name="username" required><br>
        <label>Password</label> : <input type="password" name="password" required><br>
        <input type="submit" value="Se connecter"><input type="reset" value="Effacer">
        <button id="retour" onclick="window.location.href='index.php'">Retour</button>
        <p>Mot de passe oublié? <a href="recuperation_mdp.php">Réinitialiser mon mot de passe.</a></p>
        <P>Si vous n'avez pas de conpte,crée en un <a href="inscription.php">ici.</a></p>
        </fieldset></form>
</body>
</html>