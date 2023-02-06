<?php
require('functions/auth.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dsa France</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <?php include('extensions/header.php');
  ?>
  <div class="dsa_france">
    <div class="divimg2"><img class="img_acteur" src="img/Dsa_france.png"></div>
    <div class="txt_acteur">
      <h2>Dsa France</h2>
      <p>Dsa France accélère la croissance du territoire et s'engage avec les collectivités territoriales.
        Nous accompagnons les entreprises dans les étapes clés de leur évolution.
        Notre philosophie : s'adapter à chaque entreprise.
        Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à
        chaque étape de la vie des entreprises
      </p>
    </div>
  </div>
  <div class="comment_count">
    <p><?php echo" Commentaires" .$nbre_commentaires;?></p>
    <button class="new_comment_btn">Nouveau commentaire</button>
    <button class="like-btn"><i class="fa fa-thumbs-up"></i></button>
    <button class="dislike-btn"><i class="fa fa-thumbs-down"></i></button>
    <div class="comment_section">
      <form>
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username"><br>
        <label for="date">Date:</label>
        <input type="date" id="start" name="trip-start"><br>
        <label for="comment">Commentaire:</label>
        <textarea id="comment" name="comment"></textarea>
      </form>
    </div>
    <div class="comment_section">
      <form>
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username"><br>
        <label for="date">Date:</label>
        <input type="date" id="start" name="trip-start"><br>
        <label for="comment">Commentaire:</label>
        <textarea id="comment" name="comment"></textarea>
      </form>
    </div>
    <div class="comment_section">
      <form>
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username"><br>
        <label for="date">Date:</label>
        <input type="date" id="start" name="trip-start"><br>
        <label for="comment">Commentaire:</label>
        <textarea id="comment" name="comment"></textarea>
      </form>
    </div>
  </div>
</body>
<?php include('extensions/footer.php'); ?>

</html>