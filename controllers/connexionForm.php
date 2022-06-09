<?php

/**
 * Fonction qui prend 2 paramètres : nom d'utilisateur et mot de passe
 * Retourne soit l'utilisateur soit faux
 */
function login(string $login, string $pwd)
{
  if ($login == "moi" && $pwd == "123") {
    //Je stocke en session l'utilisateur connecté
    $_SESSION['user'] = $login;
    return $login;
  } else {
    return false;
  }
}




//Si je suis déjà connecté
if (isset($_SESSION['user'])) {
  include('pages/connexionFormConfirmation.php');
} else {
  $user = login($_POST['login'], $_POST['password']);
  //Si la connexion à réussie 
  if ($user) {
    //Je recharge la page pour afficher les bonnes informations dans le menu
    header("Location: index.php?page=connexionForm");
  } else {
    //Si la connexion à échouer, j'affiche un message d'erreur
    echo '<div class="alert alert-warning" role="alert">
    Erreur de connexion...
    </div>';
  }
}
