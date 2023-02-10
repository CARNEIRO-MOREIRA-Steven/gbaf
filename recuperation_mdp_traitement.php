<?php
include('functions/config.php');
try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8",$username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['username'], $_POST['question'], $_POST['reponse'])) {
    $username = $_POST['username'];
    $question = $_POST['question'];
    $reponse = $_POST['reponse'];

    $sql = "SELECT * FROM account WHERE username = :username AND question = :question AND reponse = :reponse";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':question', $question);
    $stmt->bindParam(':reponse', $reponse);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // les informations sont correctes, nous pouvons mettre à jour le mot de passe
        if (isset($_POST['new_password'])) {
            $newPassword = $_POST['new_password'];
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $sql = "UPDATE account SET password = :password WHERE username = :username";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            echo "Le mot de passe a été mis à jour avec succès !<br> <a href='connexion.php'>Connectez-vous</a</div>";
        } else {
            // Affiche un formulaire pour entrer le nouveau mot de passe
            echo '<form method="post" action="">';
            echo '<input type="hidden" name="username" value="' . $username . '">';
            echo '<input type="hidden" name="question" value="' . $question . '">';
            echo '<input type="hidden" name="reponse" value="' . $reponse . '">';
            echo '<label for="new_password">Nouveau mot de passe :</label>';
            echo '<input type="password" name="new_password" id="new_password" required>';
            echo '<input type="submit" value="Modifier">';
            echo '</form>';
        }
    } else {
        echo 'Les informations saisies ne correspondent pas à celles enregistrées dans la base de données.';
    }
}

?>