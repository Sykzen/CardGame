<?php
session_start();
session_unset();
#Detruit tous les variables de la session
session_destroy();
#detruit le session
setcookie("ajax_login_user", "", time() - 60 * 3600, "/");
header("Location: ../index.php");
