<?php

//Si la connexion à réussie 
if ($_POST['login'] == "moi" && $_POST['password'] == "123") {
  $user = $_POST['login'];
  // On crée une variable de session avec la clé user
  $_SESSION['user'] = $user;
  include('pages/connexionFormConfirmation.php');
} else {
  //Si la connexion à échouer, j'affiche un message d'erreur
  echo '<div class="alert alert-warning" role="alert">
    Erreur de connexion...
    </div>';
}
