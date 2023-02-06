<?php
require('functions/auth.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formation&co</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <?php include('extensions/header.php');
  ?>
  </div>
  <div class="formation_co">
    <div class="divimg2"><img class="img_acteur" src="img/formation_co.png"></div>
    <div class="txt_acteur">
      <h2>Formation&Co</h2>
      <p>Formation&co est une association française présente sur tout le territoire.
        Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un
        accompagnement professionnel et personnalisé.<br>
        Notre proposition :
      <ul>
        <li>Un financement jusqu'à 30 000€ ;</li>
        <li>un suivi personnalisé et gratuit ;</li>
        <li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li>
      </ul>

      Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… .Nous collaborons
      avec des personnes talentueuses et motivées.
      Vous n'avez pas de diplômes ? Ce n'est pas un problème pour nous ! Nos financements s'adressent à tous.
      </p>
    </div>
  </div>
  <div class="comment_count">
    <p>X Commentaires</p>
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