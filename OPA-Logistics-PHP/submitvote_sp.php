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
 
$uc = $_POST['uc'];
$cl = $_POST['cl'];
$ms = $_POST['ms'];
$nw = $_POST['nw'];
$mh = $_POST['mh'];
$pp = $_POST['pp'];

echo $uc."<br>";

$voteUC="INSERT INTO SixtyPercentVotes (Name, AreaOfService, Semester) VALUES ('".$uc."', 'University Community', 'spring2015')";
if(!$submittedUC= $conn->query($voteUC)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

echo $cl."<br>";


$voteCL="INSERT INTO SixtyPercentVotes (Name, AreaOfService, Semester) VALUES ('".$cl."', 'Community at Large', 'spring2015')";
if(!$submittedCL= $conn->query($voteCL)){
    echo 'ERROR'.$conn->error."<br>";
    $err = TRUE;
}

echo $ms."<br>";


$voteMS="INSERT INTO SixtyPercentVotes (Name, AreaOfService, Semester) VALUES ('".$ms."', 'Members of the Sorority', 'spring2015')";
if(!$submittedMS= $conn->query($voteMS)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

echo $nw."<br>";


$voteNW="INSERT INTO SixtyPercentVotes (Name, AreaOfService, Semester) VALUES ('".$nw."', 'Nations of the World', 'spring2015')";
if(!$resultNW= $conn->query($voteNW)){
    echo 'ERROR'.$conn->error."<br>";
    $err = TRUE;
}

$voteMH="INSERT INTO SixtyPercentVotes (Name, AreaOfService, Semester) VALUES ('".$mh."', 'Mental Health', 'spring2015')";
if(!$submittedMH= $conn->query($voteMH)){
    echo 'ERROR'.$conn->error."<br>";
    $err = TRUE;
}

echo $mh."<br>";

$votePP="INSERT INTO SixtyPercentVotes (Name, AreaOfService, Semester) VALUES ('".$pp."', 'President Project', 'spring2015')";
if(!$submittedPP= $conn->query($votePP)){
    echo 'ERROR'.$conn->error."<br>";
    $err = TRUE;
}

echo $pp."<br>";

if (!$err) {
   $_SESSION['success'] = 1;
   header("location:home.php"); 
}

ob_end_flush();
?>


