<?php session_start(); ?>
<?php include 'header.php';
?>


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
                        <td>(getNom)</td>
                        <td>(getScore)</td>
                        <td>(getLvl)</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>(getNom)</td>
                        <td>(getScore)</td>
                        <td>(getLvl)</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>



    <script src="../js/main.js"></script>


</body>

</html>