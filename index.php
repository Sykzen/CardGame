<!-----------Importation--------------->
<?php include 'php/header.php'; ?>
<link rel="stylesheet" href="css/index.css" />
<!-----------Navbar--------------->
<?php include 'php/navbar.php'; ?>
<!-----------fin Navbar--------------->
<!-------------------------------------  Début Modal------------------------------>
<?php include 'php/modalauth.php'; ?>
<!-------------------------------------  Fin Modal------------------------------>

<!------  Body(Input nb joueurs , boutton chercher partie) -->

<div class="position-absolute top-50 start-50 translate-middle">
  <!--aligner a la ligne avec flexbox-->

  <div class="container">
    <div class="row">
      <div class="col">
        <a href="php/gamebot.php">
          <div class="card">
            Jouer contre un bot
          </div>
        </a>
      </div>

      <div class="col">
        <a href="php/game.php">
          <div class="card">
            1 Vs 1
          </div>
          <a href="php/game.php">
      </div>


    </div>
  </div>
</div>
<!-------------------------------------  Fin Body ------------------------------>

</head>

</html>