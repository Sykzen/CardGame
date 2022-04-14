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
    <link rel="stylesheet" href="css/index.css" />
    <!----------------------Font Awesome---------------------------------->

    <script src="https://kit.fontawesome.com/1164413ddc.js" crossorigin="anonymous"></script>
    <!--------------------------Ajax------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!--------------------------------------------------------------------------------------  Début Body ------------------------------------------------------------>
    <!--  NAVBAR conexion,classement des joueurs et profile-->
    <div class="bg-image" style="background-image: url('static/back.jpg'); height: 100vh">
        <!-- img backgorund-->

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



                                <a class="nav-link active" aria-current="page" href="classement.php"><i class="fa-solid fa-ranking-star"></i>Consulter le classement des joueurs</a>
                        </li>
                </div>
                </ul>
                <div class="mr-3" style="margin-right:3rem;">
                    <button class=" btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#authModal">
                        Connexion
                    </button>
                </div>

            </div>
    </div>
    </nav>