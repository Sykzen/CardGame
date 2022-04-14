
<?php
$jsonString = file_get_contents('config/db_user.json');
$data = json_decode($jsonString, true);
if ($_POST["button"] == "login") {
    #Verifier si l'utilisateur existe
    if (isset($data[$_POST['Pseudo']])) {
        #Verifier si le mot de passe est correct
        if ($data[$_POST["Pseudo"]]["password"] == $_POST["password"]) {
            echo ("Vous êtes connecté");
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
        file_put_contents('config/db_user.json', $newJsonString);
        echo "Inscription reussi";
    }
}

#check if the user is logged in
if (isset($_SESSION['Pseudo'])) {
    #if the user is logged in, redirect to the home page
    header('Location: index.php');
}

#header('Location: ../templates/index.html');


?>

