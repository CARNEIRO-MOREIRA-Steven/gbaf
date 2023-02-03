<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètre du compte</title>
    <link href="css/style.css" rel="stylesheet">
</head>
    <body>
    <?php include('extensions/header.php');
?>
    <form method="post" action="parametre_compte_traitement.php">
        <fieldset>
        <legend>Modifier vos informations</legend>
        <label>Nom</label> : <input type="text" name="nom"><br>
        <label>Prenom</label> : <input type="text" name="prenom"><br>
        <label>Username</label> : <input type="text" name="username"><br>
        <label>Password</label> : <input type="text" name="password"><br>
        <label>Question secrète</label> : 
<select name="my_html_select_box"value="<?php echo $_user['question'];?>">
	<option>Nom de votre père</option>
	<option>Nom de votre animal de compagnie</option>
	<option>Ville de naissance</option>
</select>
        <label>Réponse</label> : <input type="text" name="reponse"><br></p>
        <input type="submit" value="Modifier">