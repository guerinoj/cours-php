<?php

if($_POST['login']== "moi" && $_POST['password']== "123"){
  $user = $_POST['login'];
  include('pages/connexionFormConfirmation.php');
} else {
  echo "Erreur de connexion...";
}