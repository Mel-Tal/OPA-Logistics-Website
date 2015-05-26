<?php

$host="localhost";
$user="talltech_mt"; 
$pass="julia1996";
$db_name="talltech_ophiavotes";
$err = FALSE;

session_start();

if (!$conn = new mysqli($host, $user, $pass, $db_name)){
    echo 'ERROR - Could Not connect to database';
    $err = TRUE;
} 
 
$name = $_POST['name'];

$vote="INSERT INTO OphiasPalVotes (Name) VALUES ('".$name."')";
if(!$submitted= $conn->query($vote)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

if (!$err) {
   $_SESSION['success'] = 1;
   header("location:home.php"); 
}

ob_end_flush();
?>

