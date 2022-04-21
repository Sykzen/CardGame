<!-----------Importation--------------->
<?php session_start(); ?>
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


  <?php
  #Si l'utilisateur est connecté il peut acceder aux deux type de jeu
  if (isset($_SESSION['Pseudo'])) {
    echo '<div class="container">
          <div class="row">
            <div class="col">
                <a href="salleattente.php">
                  <div class="card">
                      1 Vs 1
                  </div>
                  </a>
            </div>
            <div style="margin:10px;"> </div>
              <div class="col">
                 <a href="php/gamebot.php">
                  <div class="card">
                        Jouer solo
                </div>
         </a>';
  } else { #Sinon il n'a accès qu'au mode solo
    echo '<div class="alert alert-danger" role="alert">
          Vous devriez être connecté pour jouer au mode 1V1
        </div>
        <a href="php/gamebot.php">
                  <div class="card">
                        Jouer solo
                </div>
         </a>
          ';
  } ?>






</div>


</div>
</div>
</div>
<!-------------------------------------  Fin Body ------------------------------>

</head>

</html>