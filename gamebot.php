<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>




</head>

<body>

    <div class="position-absolute top-50 start-50 translate-middle">
        <div>
            <div id="tableDiv">

            </div>
        </div>
        <!----on crée l'espace entre le tableau et les joueurs --->
        <div style="margin-top:100px;"></div>
        <!---Affichage des joueus et leurs scores--->
        <div class="container">
            <div class="row">
                <div class="col">
                    Joueur 1
                </div>
                <div class="col">
                    Bot
                </div>

            </div>
        </div>
    </div>




</body>

</html>











































































<!-------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------
---------------------------------------------------------
---------------------------------------------------------
---------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------


------------------------------------------------------------------------------------------------------------------

--------------------------------------------------------->


<script>
    $(function() {

        function shuffle(a) {
            var j, x, i;
            1
            for (i = a.length - 1; i > 0; i--) {
                j = Math.floor(Math.random() * (i + 1));
                x = a[i];
                a[i] = a[j];
                a[j] = x;
            }
            return a;
        }
        var table = ['1C', '1P', '1S', '1T', 'DC', 'DP', 'DS', 'DT', 'RC',
            'RP', 'RS', 'RT', 'VC', 'VP', 'VS', 'VT', 'XC', 'XP', 'XS', 'XT'
        ]

        table = shuffle(table);
        var cmp = 0;

        var table_body = '<table border="1">';
        for (var i = 0; i < 4; i++) {
            table_body += '<tr>';
            for (var j = 0; j < 5; j++) {

                table_body += '<td id=' + table[cmp] + ' >';
                table_body += '<img id=' + table[cmp] + ' src="cartes/backside.png">';
                table_body += '</td>';
                cmp++;
            }
            table_body += '</tr>';
        }
        table_body += '</table>';
        $('#tableDiv').html(table_body);
    });
    var cmp = 0;
    var y;
    var z;
    var app = 0;




    $(document).ready(function() {

        $("img").click(function() {
            if (app == 0) {

                if (cmp == 0) {

                    y = $(this).attr('id');
                    cmp++;
                    $(this).attr("src", "cartes/" + $(this).attr('id') + ".png");

                } else if (cmp == 1) {
                    z = $(this).attr('id');
                    cmp++;
                    $(this).attr("src", "cartes/" + $(this).attr('id') + ".png");
                    if (z.substring(1) != y.substring(1) && z.substring(0, 1) != y.substring(0,
                            1) || z == y) {


                        setTimeout(function() {
                            $("#" + z + " img").attr("src", "cartes/backside.png");
                            $("#" + y + " img").attr("src", "cartes/backside.png");
                            app = 0;

                        }, 1500);


                        app++;


                    }
                    cmp = 0;




                } else {





                }
            }





        });





    });
</script>