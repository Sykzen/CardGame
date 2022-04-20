<?php session_start(); ?>
<?php include 'php/header.php'; ?>
<?php include 'php/navbar.php'; ?>


<?php
$jsonString = file_get_contents("json/share.json");
$data = json_decode($jsonString, true);
$data[$_SESSION['Pseudo']] = array("Niveau" => $_SESSION['Niveau']);
$newJsonString = json_encode($data);
file_put_contents("json/share.json", $newJsonString);
#print all the user is share.json
echo '<strong>Les joueur actuellement   sont: ';
foreach ($data as $key => $value) {
    echo $key . ' ';
}


echo '<a href="php/game.php">Commencer la partie</a></strong>';
?>