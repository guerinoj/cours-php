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
 * Retourne un utilisateur grâce à son id
 */
function getUserbyId(int $id)
{
  //Connection à la BDD
  $bdd = connection();

  $sql = "SELECT * 
          FROM users 
          WHERE id=?";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant l'identifiant
  $requete->execute([$id]);

  $data = $requete->fetchAll(); 

  //Retourne le premier enregistrement de la requete
  return $data[0];
}

/**
 * Retourne un utilisateur suivant son login et mdp
 */

function getUserByLogin(string $login, string $pwd)
{

  //Connection à la BDD
  $bdd = connection();
  $sql = "SELECT * 
          FROM users 
          WHERE name=? 
          AND password=?";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant 2 paramètres
  $requete->execute([$login, $pwd]);

  return $requete->fetchAll();
}

function loginByUser(string $login, string $pwd)
{
  //Récupération des informations depuis le model User
  $user = getUserByLogin($login, $pwd);
  if (isset($user[0])) {
    $_SESSION['user'] = $user[0]['name'];
    setcookie('user', $user[0]['name']);
    return true;
  } else {
    return false;
  }
}
/**
 * Permet de créer un nouvel utilisateur dans la BDD
 */
function createUser(string $name, string $pwd)
{
  //Connection à la BDD
  $bdd = connection();
  $sql = "INSERT INTO users (name, password)
          VALUES(?,?) ";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant 2 paramètres
  return $requete->execute([$name, $pwd]);
}

function deleteUser(int $id)
{
  //Connection à la BDD
  $bdd = connection();
  $sql = "DELETE FROM users WHERE id = ? ";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant 1 paramètres
  return $requete->execute([$id]);
}

/**
 * Permet de mettre à jour un utilisateur dans la BDD
 */
function updateUser(int $id, string $name, string $pwd)
{
  //Connection à la BDD
  $bdd = connection();
  $sql = " UPDATE users SET name=?, password=? WHERE id = ? ";

  //Préparation de la requête
  $requete = $bdd->prepare($sql);

  //Execution de la requête en passant 3 paramètres
  return $requete->execute([$name, $pwd, $id]);
}
