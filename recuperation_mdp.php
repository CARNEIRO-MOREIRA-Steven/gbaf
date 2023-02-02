<?php 
if(isset($_POST['valider'])){
    if (empty($_POST['username']) and !empty($_POST['password']));
}
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération mot de passe</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include('extensions/header.php');
?>
<form method="post" action="" >
 <fieldset>
            <legend>Réinitialisation mot de passe</legend>
        <label>Username</label> : <input type="text" name="username" required><br>
        <label>Question secrète</label> : 
<select name="my_html_select_box">
	<option>Nom de votre père</option>
	<option>Nom de votre animal de compagnie</option>
	<option>Ville de naissance</option>
</select>
        <label>Réponse</label> : <input type="text" name="question" required><br></p>
        <input type="submit" value="Réinitialiser">
 </fieldset>
</form>
</body>
</html>