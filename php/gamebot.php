<?php session_start(); ?>
<?php include 'header.php';
?>




</head>

<body class="bg-success" style="background: url(../static/back.jpg);
    background-size: cover;">

    <div style="position: absolute; bottom: 0;">

    </div>

    <div>
        <div class="container text-center">
            <div id="tableDiv" style='margin-top: 50px;'>

            </div>


        </div>


        <!----on crée l'espace entre le tableau et les joueurs --->
        <div style="margin-top:150px;"></div>
        <!---Affichage des joueus et leurs scores--->
        <p id="tour"></p>
        <div class="container">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Joueurs</th>
                        <th scope="col">Score</th>
                        <th scope="col">Niveau</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <?php
                        #if user logged in
                        if (isset($_SESSION['Pseudo'])) {
                            echo '<td>' . $_SESSION['Pseudo'] . '</td>';
                        } else {
                            echo '<td>' . 'Anonyme' . '</td>';
                        }
                        ?>

                        <td id="joueur2"></td>

                        <?php
                        #if user logged in
                        if (isset($_SESSION['Niveau'])) {
                            echo '<td>' . $_SESSION['Niveau'] . '</td>';
                        } else {
                            echo '<td>' . 'Anonyme' . '</td>';
                        }
                        ?>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>BOT</td>
                        <!---on affiche le score du bot--->

                        <td id="joueur1">

                        </td>
                        <td>-</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>




    <script src="../js/mainBOT.js"></script>


</body>

</html>