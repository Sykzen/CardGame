<?php session_start(); ?>
<?php include 'php/header.php'; ?>
<?php include 'php/navbar.php'; ?>
<link rel="stylesheet" href="salle.css" />

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xsx-6">

            </div>
            <div class="col-md-3 col-sm-6 col-xsx-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa fa-id-card-o"></i></span>
                    </div>
                    <div class="service-content">
                        <h3 class="title">Joueur</h3>
                        <p class="description">
                        <div id='joueur'></div>
                        </p>
                        <a href="" class="read-more fa fa-plus" data-toggle="tooltip" title="Read More"></a>
                    </div>
                </div>
            </div>





        </div>
    </div>


    <div style="margin-left:400px;" class="messagepredefini">
        <div class="titre3">Réglement</div>
        <h>Memory</h>
        <div class="texte1">
            <left>
                <p style="font-size:20px;">Chaque joueur dispose de son propre tableau de jeux</br>
                    -chaque match de carte rapportera un points </br>
                    -Le premier joueur ayant fini la partie gagne 10 points</br>
                    -Le joueur ayant le plus de points gagne la partie</br>
                </p>
            </left>
        </div>
    </div>
    <br />
    <div>
        <!-- Boutton lancer la partie -->
        <a href="php/game.php"> <button style="margin-top:350px;text-align:center;" class="position-absolute top-50 start-50 btn btn-success"> Lancer la partie</button></a>


        <script>
            var nom = localStorage.nom;
            $.ajax({
                url: 'salle.php',
                data: {
                    username: nom
                },
                method: 'post',
                success: function(data) {
                    $('#joueur').html(data);
                }
            })
        </script>