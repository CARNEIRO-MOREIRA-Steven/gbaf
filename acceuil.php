<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('extensions/header.php');
    ?>
    <main>
        <section>
            <div class="gbaf">
                <h1>GBAF</h1>
                <p>Bienvenue sur le Groupement Banque-Assurance Français GBAF qui est une fédération représentant les 6
                    grands groupes français :
                <ul>
                    <li>BNP Paribas</li>
                    <li>BPCE</li>
                    <li>Crédit Agricole</li>
                    <li>Crédit Mutuel-CIC</li>
                    <li>Société Générale</li>
                    <li>La Banque Postale</li>
                </ul>
                </p>
            </div>
        </section>
        <section>
            <h2>Nos Acteurs partenaires</h2>
            <p>Parmi nos acteurs partanaires, vous pourrez retrouver : Formation&co, Protectpeople, Dsa France, La CDE
                (Chambre Des Entrepreneurs)</p>
        </section>
        <div class="conteneur">
            <div class="element1">
                <div class="divimg1"><img class="img1" src="img/formation_co.png" alt="Logo Formation&co"></div>
                <div class="acteurtxt">
                    <h3>Formation&co</h3>
                    <p>Formation&co est une association française présente sur tout le territoire.</p>
                </div>
                <form action="formation_co.php">
                    <button class="button1" type="submit">Lire la suite</button>
                </form>
            </div>
            <section>
            <div class="element2">
                    <div class="divimg1"><img class="img1" src="img/protectpeople.png" alt="Logo Protectpeople"></div>
                    <div class="acteurtxt">
                        <h3>Protectpeople</h3>
                        <p>Protectpeople finance la solidarité nationale.</p>
                    </div>
                    <form action="protectpeople.php">
                        <button class="button1" type="submit">Lire la suite</button>
                    </form>
                </div>
            </section>
            <section>
                <div class="element3">
                    <div class="divimg1"><img class="img1" src="img/Dsa_france.png" alt="Logo Dsa France"></div>
                    <div class="acteurtxt">
                        <h3>Dsa France</h3>
                        <p>Dsa France accélère la croissance du territoire et s'engage.</p>
                    </div>
                    <form action="dsa_france.php">
                        <button class="button1" type="submit">Lire la suite</button>
                    </form>
                </div>
            </section>
            <section>
                <div class="element4">
                    <div class="divimg1"><img class="img1" src="img/CDE.png" alt="Logo CDE"></div>
                    <div class="acteurtxt">
                        <h3>Chambre Des Entrepreneurs</h3>
                        <p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises </p>
                    </div>
                    <form action="cde.php">
                        <button class="button1" type="submit">Lire la suite</button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
<?php include('extensions/footer.php'); ?>

</html>