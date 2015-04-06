<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>OPA Votes</title>
        <link rel="stylesheet" type="text/css" href="overall.css">
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="jumbotron" style="background-color: lightskyblue">
            <h1>Nominate a Sister</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="sister_of_the_month.php">Sister of the Month</a>
                <li class="active">Nominate a Sister</li>
            </ol>
            
            <form name="vote_sp" method="post" action="som_add.php">
                <h3>Name:</h3>
                <input type ="text" name="Name" id ="name">
                <br>
                <br>
                <input type="submit" name="Submit" value="Submit">
            </form>
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

                $name = $_POST['Name'];

                if ($name != "") {
                    $add = "INSERT INTO SOMCandidates VALUES ('".$name."')";

                    if(!$added= $conn->query($add)){
                        echo 'ERROR'.$conn->error."<br>";
                        echo $add;
                        $err = TRUE;
                    }

                    if (!$err) {
                        echo 'Sister Added';
                    } 

                    ob_end_flush();
                }
            ?>

            <br><a href='som_clear_candidates.php'>Delete All Candidates</a>
            
        </div>
    </body>
</html>