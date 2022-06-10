<?php

// Model utilisateur
require_once("models/User.php");

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case "delete":
      deleteUser($_GET["id"]);
      header("Location: index.php?page=utilisateurs");
      break;

    case "create":
      createUser($_POST['login'], $_POST['password']);
      header("Location: index.php?page=utilisateurs");

    case "update":
      $user = getUserbyId($_GET['id']);
      include("pages/editUser.php");
      break;

    case "save":
      updateUser($_POST['id'],$_POST['login'],$_POST['password']);
      header("Location: index.php?page=utilisateurs");
      break;

    default:
      include("pages/404.php");
      break;
  }
} else {
  $users = getUsers();
  //View
  include("pages/utilisateurs.php");
}
