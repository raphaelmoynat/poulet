<?php
$loginForm = "    <form   method='post'>
        <div>
            <input type='text' placeholder='username' name='username' id='' class='form-control'>
        </div>
        <div>
            <input type='password' placeholder='password' name='password' id='' class='form-control'>
        </div>
        <div>
            <button type='submit' class='btn btn-success'>log in</button>
        </div>

    </form>";


function afficheUnPlat(array $plat)
{
  $presentation = "<div class='d-flex justify-content-center'>";



  foreach($plat as $infos)
  {
    $platDansUnTemplate= "
            <div class='card mx-2' style='width: 18rem;'>
        <img src='$infos[image]' class='card-img-top img' alt='#'>
        <div class='card-body'>
          <h5 class='card-title'>$infos[nom]</h5>
          <p class='card-text'>Type : $infos[type]</p>
          <p class='card-text'>Cuisson : $infos[type]</p>
          <p class='card-text'>Accompagnement : $infos[accompagnement]</p>
          <p class='card-text'>Sauce : $infos[sauce]</p>
          <form method='POST'>
           <button type='submit' class='btn btn-warning' name='pouletId' value='$infos[id]'>Page produit</button>
          </form>
        
        </div>
        </div>
    ";
    $presentation  .= $platDansUnTemplate;
    }

  $presentation .= "</div>";

  return $presentation;
}

function affichePageProduit(array $plats, $idPoulet){
  $presentation = "<div class='d-flex justify-content-center'>";

  foreach($plats as $plat){
    if ($plat['id'] == $idPoulet){
      $platDansUnTemplate = "
                <div class='card mx-2' style='width: 18rem;'>
                    <img src='$plat[image]' class='card-img-top img' alt='#'>
                    <div class='card-body'>
                        <h5 class='card-title'>$plat[nom]</h5>
                        <p class='card-text'>Type : $plat[type]</p>
                        <p class='card-text'>Cuisson : $plat[cuisson]</p>
                        <p class='card-text'>Accompagnement : $plat[accompagnement]</p>
                        <p class='card-text'>Sauce : $plat[sauce]</p>
                    </div>
                </div>
            ";
      $presentation .= $platDansUnTemplate;
    }
  }

  $presentation .= "</div>";

  return $presentation;
}

