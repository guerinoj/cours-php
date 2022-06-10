<?php 

function connection()
{
  // Utilisateur de MySQL
  $user = "root";
  //Mot de passe de l'utilisateur MySQL
  $pass = "";
  //Information sur le serveur MySQL
  $dsn = "mysql:host=localhost;dbname=cours-digi";
  $bdd = new PDO($dsn, $user, $pass);

  return $bdd;
}