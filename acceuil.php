<?php
require_once('functions/auth.php');
require('functions/config.php');
include_once('extensions/header.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <section>
            <div class="gbaf">
                <h1>GBAF</h1>
                <p>Bienvenue sur le Groupement Banque-Assurance Français GBAF qui est une fédération représentant les 6
                    grands groupes français :</p>
                <ul>
                    <li>BNP Paribas</li>
                    <li>BPCE</li>
                    <li>Crédit Agricole</li>
                    <li>Crédit Mutuel-CIC</li>
                    <li>Société Générale</li>
                    <li>La Banque Postale</li>
                </ul>
            </div>
        </section>
        <section>
        <div class ="partenaires">
            <h2>Nos Acteurs partenaires</h2>
            <p>Parmi nos acteurs partanaires, vous pourrez retrouver : Formation&co, Protectpeople, Dsa France, La CDE
                (Chambre Des Entrepreneurs)</p>
            </div>
        </section>
        <div class="conteneur">
        <?php
$id_acteur = ''; //On va chercher les acteurs dans la BDD
$stmt = $conn->prepare("SELECT * FROM acteur");
$stmt->execute();
$acteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($acteurs) {
    foreach ($acteurs as $acteur) { //Boucle acteurs
        $id_acteur = $acteur['id_acteur'];
        ?>
        <div class="element">
            <div class="divimg1">
                <img class="img1" src="<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>">
            </div>
            <div class="acteurtxt">
                <h3><?php echo $acteur['acteur']; ?></h3>
                <?php echo "<p class='acteurtxt'>" . substr($acteur['description'], 0, 45) . "..." ?></p>
                <a href="organisme.php?id=<?php echo $id_acteur; ?>"><button class="acteur_btn">Lire la suite</button></a>
            </div>
        </div>
    <?php
    }
}
?>




        </div>
    </main>
</body>
<?php include('extensions/footer.php'); ?>

</html>