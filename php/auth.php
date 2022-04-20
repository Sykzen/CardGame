<?php
session_start();


$jsonString = file_get_contents("../secret/db_user.json");
$data = json_decode($jsonString, true);
if ($_POST["button"] == "login") {
    #Verifier si l'utilisateur existe
    if (isset($data[$_POST['Pseudo']])) {
        #Verifier si le mot de passe est correct
        password_verify($_POST["password"], $data[$_POST["Pseudo"]]["password"]);
        if (password_verify($_POST["password"], $data[$_POST["Pseudo"]]["password"])) {
            echo ("Vous êtes connecté");
            $_SESSION['Pseudo'] = $_POST['Pseudo'];
            $_SESSION['Niveau'] = 'Novice';
            header('Location: ../index.php');
        } else {
            echo ("Mot de passe incorrect");
        }
    } else {
        echo ("Pseudo incorrect ou vous n'êtes pas inscrit");
    }
} else {
    #Si il est pas entrain de se connecter il est entrain de s'inscrire
    if (isset($data[$_POST['Pseudo']])) {
        echo ("Pseudo déjà utilisé");
    } else {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data[$_POST['Pseudo']] = array("password" => $hash, "Ranking" => -1, "Score" => 0, "Nb_partie" => 0, "Level" => "Novice");
        $newJsonString = json_encode($data);
        file_put_contents("../secret/db_user.json", $newJsonString);
        $_SESSION['Pseudo'] = $_POST['Pseudo'];
        $_SESSION['Niveau'] = 'Novice';

        header('Location: ../index.php');
    }
}

#check if the user is logged in
if (isset($_SESSION['Pseudo'])) {
}
