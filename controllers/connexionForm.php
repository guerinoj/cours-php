<?php

if ($_POST['login'] == "moi" && $_POST['password'] == "123") {
  $user = $_POST['login'];
  include('pages/connexionFormConfirmation.php');
} else {
  echo '<div class="alert alert-warning" role="alert">
    Erreur de connexion...
    </div>';
}
