<?php
require_once "templates.php";
require_once "index.php";

$isLoggedIn = false;

$username = "michel";
$password = "choucroute";

$usernameUtilisateur = "";
$passwordUtilisateur = "";

$idPoulet = '';

$pageProduit = false;
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

if (isset($_POST['pouletId'])){
  $pageProduit = true;
  $idPoulet = $_POST['pouletId'];


}


//a la fin ,si la connection est acceptée,
//mettre isLoggedIn en true
