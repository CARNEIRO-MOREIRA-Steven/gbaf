<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Acteur</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once('functions/auth.php');
    require_once('config.php');
    include('extensions/header.php')
    ?>
    <?php

    $id_acteur = isset($_GET['id']) ? $_GET['id'] : 0;

    $stmt = $conn->prepare("SELECT * FROM acteur WHERE id_acteur = :id");

    $stmt->bindValue(':id', $id_acteur);

    $stmt->execute();

    $acteur = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($acteur) {
        $stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE id_acteur = :id");
        $stmt->bindValue(':id', $id_acteur);
        $stmt->execute();
        $count = $stmt->fetchColumn();
    ?>
        <div class="element2">
            <div class="divimg2">
                <img class="img_acteur" src="<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>">
            </div>
            <div class="acteurtxt2">
                <h3><?php echo $acteur['acteur']; ?></h3>
                <p><?php echo $acteur['description']; ?></p>
            </div>
        </div>
        <div class="comments">
            <?php echo $count; ?><p>Commentaires</p>
            <form action="comments_traitement.php" method="post">
                <textarea name="comment"></textarea>
                <input type="hidden" name="id_acteur" value="<?php echo $id_acteur; ?>">
                <input type="submit" value="Ajouter un commentaire">
            </form>
        </div>
    <?php
    } else {
        echo 'Aucun enregistrement trouvé';
    }
    ?>

</body>

</html>