<?php
require_once("models/User.php");

//Si je suis déjà connecté
if (isset($_SESSION['user'])) {
  include('pages/connexionFormConfirmation.php');
} else {
  $is_logged = loginByUser($_POST['login'], $_POST['password']);
  //Si la connexion à réussie 
  if ($is_logged) {
    //Je recharge la page pour afficher les bonnes informations dans le menu
    header("Location: index.php?page=connexionForm");
  } else {
    //Si la connexion à échouer, j'affiche un message d'erreur
    echo '<div class="alert alert-warning" role="alert">
    Erreur de connexion...
    </div>';
  }
}
