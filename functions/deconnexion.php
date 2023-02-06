<!-- page de déconnexion -->
<?php
session_start();
if(isset($_POST['deconnexion'])) {
  session_destroy();
  header('Location: /index.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Déconnexion</title>
  </head>
  <body>
    <form method="post">
      <input type="submit" name="deconnexion" value="Déconnexion">
    </form>
  </body>
</html>