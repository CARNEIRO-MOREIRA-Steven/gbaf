<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Protectpeople</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <?php include('extensions/header.php');
  ?>
  <div class="protectpeople">
    <div class="divimg2">
      <img class="img_acteur" src="img/protectpeople.png">
    </div>
    <div class="txt_acteur">
      <h2>Protectpeople</h2>
      <p>Protectpeople finance la solidarité nationale.
        Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier
        d'une protection sociale.

        Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
        Proectecpeople est ouvert à tous, sans considération d'âge ou d'état de santé.
        Nous garantissons un accès aux soins et une retraite.
        Chaque année, nous collectons et répartissons 300 milliards d'euros.
        Notre mission est double :
      <ul>
        <li>sociale : nous garantissons la fiabilité des données sociales.</li>
        <li>économique : nous apportons une contribution aux activités économiques.</li>
      </ul>
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