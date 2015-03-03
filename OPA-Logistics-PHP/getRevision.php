<?php

$host="localhost";
$user="talltech_mt"; 
$pass="julia1996";
$db_name="talltech_ophiavotes";
$err = FALSE;

if (!$conn = new mysqli($host, $user, $pass, $db_name)){
    echo 'ERROR - Could Not connect to database';
    $err = TRUE;
} 
 
$page = $_POST['amnd'];

echo $page;

echo "<br>";

$url = "location:".$page;

echo $url;

if (!$err) {
   header($url); 
}

ob_end_flush();
?>

