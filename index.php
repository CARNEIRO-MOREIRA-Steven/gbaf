<!doctype html>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Page d'accueil</title>
      <link href="css/index.css" rel="stylesheet">
    </head>
 
  <body>
    <header>
      <?php include 'extensions/header.php'; ?>
    </header>

    <div class="page">
      <h1>Bienvenue sur l'extranet de GBAF</h1>
        <div id="home">
          <div id="inscription">
            <p>Si vous ne possédez pas encore de compte, veuillez cliquer ci-dessous afin de vous enregistrer pour avoir accès au service proposé par l'extranet</p>
            <button><a href="inscription.php">S'inscrire</a></button>
          </div> 
          <div id="connexion"> 
            <p>Si vous possédez déjà un compte, connectez-vous ci-dessous afin d'accéder à votre page d'accueil utilisateur</p>
            <button><a href="connexion.php">Se connecter</a></button>
            <button id="reset" onclick="window.location.href = 'recuperation_mdp.php'">J'ai oublié mon mot de passe</button>
          </div>
        </div>
      <div class="divider"></div>
    </div>

    <footer>
     <?php include 'extensions/footer.php';?>
    </footer>
  </body>
</html>

