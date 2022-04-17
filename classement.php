<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CardGame</title>
  <meta name="Jeux de carte qui se joue à plusieurs" content="Jeux de Carte en ligne multijoueur" />
  <meta property="og:locale" content="fr_FR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Jeux de Carte" />
  <meta property="og:description" content="Jeux de Carte MMORPG" />
  <meta property="og:image" content="image pour notre site" />
  <!--------------------------Botstrap link---------------------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!----------------------Css head and footer---------------------------------->
  <!----------------------Font Awesome---------------------------------->

  <script src="https://kit.fontawesome.com/1164413ddc.js" crossorigin="anonymous"></script>
  <!--------------------------Ajax------------------------------------------->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!----------------------Vue.js link----------------------------------->
  <script src="https://unpkg.com/vue@next"></script>

  <!--------------------------------------------------------------------------------------  Début Body ------------------------------------------------------------>
  <!--  NAVBAR conexion,classement des joueurs et profile-->
  <!-- img backgorund-->

  <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="static/brand.png" width="100" height="100" alt="" loading="lazy" /></a>
      <button style="border-color: black" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color: green" class="nabar-toggler-icon"><i class="bi bi-file-plus"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </div>
      </ul>
      <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#authModal">
        Connexion
      </button>

      <a class="btn btn-outline-success" aria-current="page" href="profile.php">Profile</a>
    </div>



  </nav>


  <div style="background-image: url('static/back.jpg');position:relative; 
    height: 100vh;">
    <div class=container>
      <div class="col col-lg-2">
        &nbsp;
      </div>
      &nbsp;

      <div class="col-md-auto  rounded-pill d-flex bg-warning justify-content-center fs-1 border border-danger" style="border-color:black;">Classement</div>
      &nbsp;
      <?php
      #echo a long bloc html

      echo "<table class='table'>
      <thead>
        <tr class='table-primary'>
          <th scope='col'>#</th>
          <th scope='col'>Pseudo</th>
          <th scope='col'>Score</th>
          <th scope='col'>Level</th>
        </tr>
      </thead>
      <tbody>";
      #import data from json file
      $jsonString = file_get_contents('config/db_user.json');
      $data = json_decode($jsonString, true);
      #sort data by score
      $sorted_score = array();
      foreach ($data as $key => $value) {
        array_push($sorted_score, $data[$key]['Score']);
        #$array[$key] = $value;
      }
      sort($sorted_score, SORT_NUMERIC);
      $sorted_score = array_reverse($sorted_score);
      $ar_color = array('table-primary', 'table-secondary', 'table-success', 'table-danger', 'table-warning', 'table-info', 'table-light', 'table-dark');
      foreach ($sorted_score as $key => $value) {
        foreach ($data as $key2 => $value2) {
          #choose rando color from ar_color
          $rand_color = array_rand($ar_color);

          if ($value == $data[$key2]['Score']) {
            echo "<tr class=" . $ar_color[$rand_color] . ">
            <th scope='row'>" . $key + 1 . " </th>
            <td>" . $key2 . "</td>
            <td>" . $data[$key2]["Score"] . "</td>
            <td>" . $data[$key2]["Level"] . "</td>
          </tr>";
          }
        }
      }
      ?>

      </tbody>
      </table>


    </div>
    <!-- On tables -->

  </div>

  <!--  NAVBAR conexion,classement des joueurs et profile-->


  <?php
  $jsonString = file_get_contents('db_user.json');
  $data = json_decode($jsonString, true);
