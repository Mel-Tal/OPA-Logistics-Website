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
 
$vote = $_POST['vote'];

$vote="INSERT INTO ElectionsVotes (position, vote) VALUES ('president', ".$vote.")";
if(!$submitted= $conn->query($vote)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

if (!$err) {
   header("location:elections.php"); 
}

ob_end_flush();
?>

