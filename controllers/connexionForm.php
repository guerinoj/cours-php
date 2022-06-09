<?php


//Si je suis déjà connecté
if ($_SESSION['user']) {
  include('pages/connexionFormConfirmation.php');
} else {

  //Si la connexion à réussie 
  if ($_POST['login'] == "moi" && $_POST['password'] == "123") {
    //Je stocke en session l'utilisateur connecté
    $_SESSION['user'] = $_POST['login'];
    //Je recharge la page pour afficher les bonnes informations dans le menu
    header("Location: index.php?page=connexionForm");
  } else {
    //Si la connexion à échouer, j'affiche un message d'erreur
    echo '<div class="alert alert-warning" role="alert">
    Erreur de connexion...
    </div>';
  }
}
