<!-----------Importation--------------->
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="cscc/index.css" />
<!-----------Navbar--------------->
<?php include 'includes/navbar.php'; ?>
<!-----------fin Navbar--------------->
<!-------------------------------------  Début Modal------------------------------>
<?php include 'includes/modalauth.php'; ?>
<!-------------------------------------  Fin Modal------------------------------>

<!------  Body(Input nb joueurs , boutton chercher partie) -->

<div class="position-absolute top-50 start-50 translate-middle">
  <!--aligner a la ligne avec flexbox-->

  <div class="container">
    <div class="row">
      <div class="col">
        <a href="gamebot.php">
          <div class="card">
            Jouer contre un bot
          </div>
        </a>
      </div>

      <div class="col">
        <a href="game.php">
          <div class="card">
            1 Vs 1
          </div>
          <a href="game.php">
      </div>


    </div>
  </div>
</div>
<!-------------------------------------  Fin Body ------------------------------>

<!----------------------------------------------------------------------------------------------Fin Body---------------------------------------------------------------------->
</head>

</html>