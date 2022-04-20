<?php session_start(); ?>
<?php include 'php/header.php'; ?>
<!--------------------------------------------------------------------------------------  Début Body ------------------------------------------------------------>
<!--  NAVBAR conexion,classement des joueurs et profile-->
<!-- img backgorund-->

<?php include 'php/navbar.php'; ?>
<?php include 'php/modalauth.php'; ?>

<div style="background-image: url('../static/back.jpg');position:relative; 
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
    $jsonString = file_get_contents('json/db_user.json');
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
            <th scope='row'>" . $key . " </th>
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