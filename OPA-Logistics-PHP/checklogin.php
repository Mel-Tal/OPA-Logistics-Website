<?php

session_start();

$host="localhost";
$username="talltech_mt"; 
$password="julia1996";
$db_name="talltech_ophiavotes";

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['user']; 
$mypassword=$_POST['pass']; 

// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM members WHERE uName='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
    // Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['user'] = $myusername;
    header("location:home.php");
}
else {
    //header("location:index.php");
}
ob_end_flush();
?>

