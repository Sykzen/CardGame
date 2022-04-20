<?php session_start(); ?>
<?php include 'header.php';
?>

<?php
$players = file_get_contents('../players.txt');
$players_ = explode("-", $players);
$players1 =  $players_[0];
$players2 =  $players_[1];






?>
<script>

</script>
</head>

<body class="bg-success" style="background-color: darkgreen;
    background-size: cover;">

    <div style="position: absolute; bottom: 0;">
        <?php include 'chat_.php';
        ?>
    </div>

    <div>
        <div class="container text-center">
            <div id="tableDiv" style='margin-top: 50px;'>

            </div>


        </div>


        <!----on crée l'espace entre le tableau et les joueurs --->
        <div style="margin-top:150px;"></div>
        <!---Affichage des joueus et leurs scores--->
        <div class='align-center alert alert-success' style='text-align:center;'>Mon score est de : <span id='joueur'></span>
        </div>

        <div class="container">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Joueurs</th>
                        <th scope="col">Niveau</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> <?php
                                echo $players1;
                                ?>
                        </td>

                        <td>
                            Novice</td>



                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><?php
                            echo $players2;
                            ?></td>
                        <!---on affiche le score du bot--->

                        <td>Novice</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>




    <script src="../js/main.js"></script>
    <script>

    </script>

</body>

</html>