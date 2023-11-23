<?php
require_once "templates.php";
require_once "index.php";

$isLoggedIn = false;

$username = "michel";
$password = "choucroute";

$usernameUtilisateur = "";
$passwordUtilisateur = "";

// logique de connection   $_POST etc etc

if (isset($_POST['username'])){
  $usernameUtilisateur = $_POST['username'];

  if( $usernameUtilisateur == $username){
    if(isset($_POST['password'])){
      $passwordUtilisateur = $_POST['password'];
      if($passwordUtilisateur == $password){
        $isLoggedIn = true;
      }
    }
  }

}


//a la fin ,si la connection est acceptée,
//mettre isLoggedIn en true
