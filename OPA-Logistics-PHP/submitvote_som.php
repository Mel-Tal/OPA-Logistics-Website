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
 
$name = $_POST['name'];

$vote="INSERT INTO SOMVotes (Name) VALUES ('".$name."')";
if(!$submitted= $conn->query($vote)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

if (!$err) {
   header("location:sister_of_the_month.php"); 
}

ob_end_flush();
?>

