<?php
session_start();
$nb = 0;

// On va enregistrer les joueurs dans un des databases
$chat = fopen("players.txt", "a");
$data = "<b>" . $_POST['username'] . '- </b> ';
fwrite($chat, $data);
fclose($chat);

$chat = fopen("players.txt", "r");
echo fread($chat, filesize("players.txt"));
fclose($chat);


$players = file_get_contents('players.txt');
$players_ = explode("-", $players);
#On va compter combien il y a de joueurs
$nb = count($players_);
if ($nb > 3) {
    $chat = fopen("players.txt", "w");
    $data = "";
    fwrite($chat, $data);
    fclose($chat);
}
