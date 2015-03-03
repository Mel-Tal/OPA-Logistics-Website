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
 
$vote = $_POST['vote'];

echo "Vote: ".$vote;
echo "<br>";

$ammendment = $_SESSION['ammendment'];
echo "Ammendment: ".$ammendment;
echo "<br>";


$stmta="INSERT INTO CAVotes (ammendment, vote) VALUES ('";
$stmtb="', '";
$stmtc="')";
$stmt=$stmta.$ammendment.$stmtb.$vote.$stmtc;
echo $stmt;
echo '<br>';
if(!$submitted= $conn->query($stmt)){
    echo 'ERROR - '.$conn->error."<br>";
    $err = TRUE;
}

if (!$err) {
    header("location:constitutional_revisions.php");
}

ob_end_flush();
?>

