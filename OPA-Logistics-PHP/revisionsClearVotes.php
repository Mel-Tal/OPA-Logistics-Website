<?php

session_start();
$host="localhost";
$user="talltech_mt"; 
$pass="julia1996";
$db_name="talltech_ophiavotes";
$err = FALSE;

if (!$conn = new mysqli($host, $user, $pass, $db_name)){
    echo 'ERROR - Could Not connect to database';
    $err = TRUE;
} 

$sql1="DELETE FROM CAVotes WHERE ammendment='";
$sql2="'";
$sql = $sql1.$_SESSION['deletingVotesFrom'].$sql2;
echo $sql;
echo '<br>';
if(!$submitted= $conn->query($sql)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

if (!$err) {
   header("location:constitutional_revisions.php"); 
}

ob_end_flush();
?>