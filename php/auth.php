<?php
session_start();


$jsonString = file_get_contents('../json/db_user.json');
$data = json_decode($jsonString, true);
if ($_POST["button"] == "login") {
    #Verifier si l'utilisateur existe
    if (isset($data[$_POST['Pseudo']])) {
        #Verifier si le mot de passe est correct
        if ($data[$_POST["Pseudo"]]["password"] == $_POST["password"]) {
            echo ("Vous êtes connecté");
            $_SESSION['Pseudo'] = $_POST['Pseudo'];
            print_r($_SESSION);
            #header('Location: index.php');
        } else {
            echo ("Mot de passe incorrect");
        }
    } else {
        echo ("Pseudo incorrect ou vous n'êtes pas inscrit");
    }
} else {
    #Si il est pas entrain de se connecter il  est entrain de s'inscrire
    if (isset($data[$_POST['Pseudo']])) {
        echo ("Pseudo déjà utilisé");
    } else {
        $data[$_POST['Pseudo']] = array("password" => $_POST['password'], "Ranking" => -1, "Score" => 0, "Nb_partie" => 0, "Level" => "Novice");
        $newJsonString = json_encode($data);
        file_put_contents('../json/db_user.json', $newJsonString);
        echo "Inscription reussi";
        $_SESSION['Pseudo'] = $_POST['Pseudo'];
        header('Location: ../index.php');
    }
}

#check if the user is logged in
if (isset($_SESSION['Pseudo'])) {
}
