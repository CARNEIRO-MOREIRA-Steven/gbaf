<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<div class="header">
  <img src="img/gbaf.png" alt="Logo GBAF" id="logo">
  <div class="nom_compte ">  
    <?php
    if(isset($_SESSION['utilisateur'])) {
        echo $_SESSION['utilisateur'];
        echo '<form method="post" action="functions/deconnexion.php">';
        echo '<input type="submit" name="deconnexion" value="Déconnexion">';
        echo '</form>';
    } else {
        
    }
    ?> 
  </div>
</div>