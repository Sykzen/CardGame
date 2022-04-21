
   
<?php
session_start();



$score1 = $_POST["sk1"];
$score2 = $_POST["sk1"];

$sk1 = fopen("score.txt", "w");
$data = "";
fwrite($sk1, $data);
fclose($sk1);

$sk1 = fopen("score.txt", "a");
$data = $score1 . "," . $score2;
fwrite($sk1, $data);
echo $score1;
fclose($sk1);