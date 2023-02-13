<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Acteur</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php
    require_once('functions/auth.php');
    require_once('functions/config.php');
    include('extensions/header.php');
    function is_logged_in()
    {
        return isset($_SESSION['id_user']);
    }

    // Récupération de l'ID de l'acteur passé en paramètre dans l'URL
    $id_acteur = isset($_GET['id']) ? $_GET['id'] : 0;

    // Récupération des informations de l'acteur dans la base de données
    $stmt = $conn->prepare("SELECT * FROM acteur WHERE id_acteur = :id");
    $stmt->bindValue(':id', $id_acteur);
    $stmt->execute();
    $acteur = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'acteur a été trouvé
    if ($acteur) {
        // Récupération du nombre de commentaires pour l'acteur
        $stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE id_acteur = :id_acteur");
        $stmt->bindValue(':id_acteur', $id_acteur);
        $stmt->execute();
        $comment_count = $stmt->fetchColumn();
    };
    $id_user = $_SESSION['id_user'];
    // Affichage des informations de l'acteur et des boutons de vote et commentaires
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
        <?php echo $comment_count . " " . "Commentaires"; ?>
        <div class="groupe_btn">
        <form action="comments_traitement.php" method="post">
            <div class="zone_commentaire">
            <input type="hidden" name="id_acteur" value="<?php echo $id_acteur; ?>">
            <input placeholder="Nouveau commentaire" type="text" name="post" required><br> </div>
                <a class="comments-btn" href="comments_traitement.php?id_acteur=<?php echo $id_acteur; ?>">
                    <button type="submit" name="button_comments">Ajouter un commentaire</button>
                </a>

        </form>
        <?php
if (is_logged_in()) {
    // Compter le nombre de commentaires pour chaque acteur
    $stmt = $conn->prepare("SELECT COUNT(*) as count FROM post WHERE id_acteur = :id_acteur");
    $stmt->bindParam(':id_acteur', $id_acteur, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $comment_count = $result['count'];

    // Compter le nombre de votes pour chaque acteur
$stmt = $conn->prepare("SELECT COUNT(*) as count FROM vote WHERE id_acteur = :id_acteur");
$stmt->bindParam(':id_acteur', $id_acteur, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$vote_count = $result['count'];
?>
    <form action="vote_traitement.php" method="post">
        <input type="hidden" name="id_acteur" value="<?php echo $id_acteur; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <button class="like_btn" type="submit" name="vote" value="1">
            <i id="id_like" class="fa fa-thumbs-up"></i>
        </button>
        <span class="vote_count"><?php echo $vote_count; ?></span>
        <button class="dislike_btn" type="submit" name="vote" value="0">
            <i id="dislike_btn" class="fa fa-thumbs-down"></i>
        </button>
        
    </form>
</div>

<?php
}
?>
<div class="comments">
    <?php echo $comment_count . " " . "Commentaires"; ?>

<?php

?>
        <?php
        $stmt = $conn->prepare("SELECT * FROM post LEFT JOIN account ON post.id_user = account.id_user WHERE post.id_acteur = :id_acteur ORDER BY date_add DESC LIMIT 3");
        $stmt->bindParam(':id_acteur', $id_acteur, PDO::PARAM_INT);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($posts) {
            foreach ($posts as $post) {
        ?>
                <div class="afficher_commentaire">
                    <div class="prenom_comment">
                        <?php echo $post['prenom']; ?>
                    </div>
                    <div class="date_comment">
                        <?php echo $post['date_add']; ?>
                    </div>
                    <div class="post_comment">
                        <?php echo $post['post']; ?>
                    </div>
                </div>
   
<?php
            }
        } else {
            echo 'Aucun commentaire';
        }
?>
 </div>
</body>
</html>
<?php include('extensions/footer.php'); ?>