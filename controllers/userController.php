<?php

// Model utilisateur
require_once("models/User.php");

//On appelle la fonction qui retourne la liste des utilisateurs
$users = getUsers();

//View
include("pages/utilisateurs.php");