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

$sql="DELETE FROM ElectionsVotes WHERE position = 'secretary'";
if(!$submitted= $conn->query($sql)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

if (!$err) {
   header("location:home.php"); 
}

ob_end_flush();
?>