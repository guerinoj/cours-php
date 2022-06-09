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


/**
 * Retourne la liste des utilisateurs
 */

function getUsers()
{
  //Connection à la BDD
  $bdd = connection();
  //Requete à la base de données
  $reponse = $bdd->query("SELECT * FROM users");

  return $reponse->fetchAll();
}
