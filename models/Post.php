<?php

require_once("models/utils.php");

/**
 * Retourne la liste des articles
 */

function getPosts()
{
  //Connection à la BDD
  $bdd = connection();
  //Requete à la base de données
  $reponse = $bdd->query("SELECT * FROM posts");

  return $reponse->fetchAll();
}

/**
 * Permet de créer un nouvel utilisateur dans la BDD
 */
function createPost(string $title, string $content, int $userId)
{
  //Connection à la BDD
  $bdd = connection();
  $sql = "INSERT INTO posts (title, content,user_id, created_date)
          VALUES(?,?,?,NOW()) ";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant 2 paramètres
  return $requete->execute([$title, $content,$userId]);
}
