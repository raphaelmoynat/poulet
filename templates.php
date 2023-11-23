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
  $presentation = "<div class='d-flex justify-content-center'>

</div>";



  foreach($plat as $infos)
  {
    $platDansUnTemplate= "
            <div class='card mx-2' style='width: 18rem;'>
        <img src='$infos[image]' class='card-img-top' alt='#'>
        <div class='card-body'>
          <h5 class='card-title'>$infos[nom]</h5>
          <p class='card-text'>Type : $infos[type]</p>
          <p class='card-text'>Cuisson : $infos[type]</p>
          <p class='card-text'>Accompagnement : $infos[accompagnement]</p>
          <p class='card-text'>Sauce : $infos[sauce]</p>
          <button id='$infos[id]'>Page Produit</button>
        </div>
        </div>
    ";
    $presentation  .= $platDansUnTemplate;
    }


  return $presentation;
}



