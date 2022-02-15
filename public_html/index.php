<?php
$str_json = file_get_contents("php://input"); 

$url = "https://afsaccess4.njit.edu/~jda52/alpha.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $str_json);
$test = curl_exec($ch); 

echo $test;

curl_close($ch);
?>