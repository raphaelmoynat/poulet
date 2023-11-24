<?php
require_once "templates.php";
require_once "authentification.php";
require_once "poulet.php";

if(!$isLoggedIn){
  $content = $loginForm;
}else{

  $content = afficheUnPlat($platsPoulet);
}

if ($pageProduit == true){
  $content = affichePageProduit($platsPoulet, $idPoulet);

}

