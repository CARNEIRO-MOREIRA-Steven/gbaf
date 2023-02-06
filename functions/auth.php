<?php
session_start();
if(!isset($_SESSION['utilisateur'])) {
  header('Location: /index.php');
  exit;
}
?>