<!--------------------------------------------------------------------------------------  Début Body ------------------------------------------------------------>
<!--  NAVBAR conexion,classement des joueurs et profile-->

<body style="background: url(static/back.jpg);
    background-size: cover;">
    <!--<div class="bg-image" style="background-image: url('static/back.jpg'); height: 100vh">--->
    <div>
        <!--- img backgorund--->

        <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="static/brand.png" width="100" height="100" alt="" loading="lazy" /></a>
                <button style="border-color: black" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="color: green" class="nabar-toggler-icon"><i class="bi bi-file-plus"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="input-group mb-3">

                                <a class="nav-link active" aria-current="page" href="classement.php"><i class="fa-solid fa-ranking-star"></i> Consulter le classement des joueurs</a>
                        </li>
                </div>
                </ul>
                <div class="mr-3" style="margin-right:3rem;">
                    <?php
                    #check if the user is connected
                    if (isset($_SESSION['Pseudo'])) {
                        #if the user is connected
                        echo 'maria';
                    }
                    #if the user is not connected

                    else {
                        echo '<button class=" btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#authModal">
            Connexion
          </button>';
                    }
                    ?>

                </div>

                <a class="btn btn-outline-success" aria-current="page" href="profile.php">Profile</a>
            </div>
    </div>
    </nav>
    <!-------------------------------------  Fin Navbar------------------------------>