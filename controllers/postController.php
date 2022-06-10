<?php

// Model utilisateur
require_once("models/Post.php");

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case "delete":
      deletePost($_GET["id"]);
      header("Location: index.php?page=articles");
      break;

    case "new":
      include("pages/editPost.php");
      break;

    case "create":
      createPost($_POST['title'], $_POST['content'],$_SESSION["userID"]);
      header("Location: index.php?page=articles");
      break;

    case "update":
      $Post = getPostbyId($_GET['id']);
      include("pages/editPost.php");
      break;

    case "save":
      updatePost($_POST['id'],$_POST['login'],$_POST['password']);
      header("Location: index.php?page=articles");
      break;

    default:
      include("pages/404.php");
      break;
  }
} else {
  $posts = getPosts();
  //View
  include("pages/accueil.php");
}
