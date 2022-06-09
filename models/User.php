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

/**
 * Retourne un utilisateur suivant son login et mdp
 */

 function getUserByLogin($login, $pwd){

  //Connection à la BDD
  $bdd = connection();
  $sql = "SELECT * 
          FROM users 
          WHERE name=? 
          AND password=?";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant 2 paramètres
  $requete->execute([$login,$pwd]);

  return $requete->fetchAll();
 }
