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
            <h1>Add a Sixty Percent Project</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="sixty_percent.php">Sixty Percent Projects</a></li>
                <li class="active">Add Sixty Percent Project</li>
            </ol>
            
            <form name="vote_sp" method="post" action="sixty_percent_add.php">
                <h3>Name of Project:</h3>
                <input type ="text" name="Name" id ="name">
                <h3>Area of Service:</h3>
                <input type ="text" name="AreaOfService" id ="aos">
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

                //$name = $_POST['Name'];
                //$aos = $_POST['AreaOfService'];


                $add = "INSERT INTO SixtyPercentCandidates VALUES ('".$name."', '".$aos."', 'spring2015')";

                if(!$added= $conn->query($add)){
                    //echo 'ERROR'.$conn->error."<br>";
                    //echo $add;
                    $err = TRUE;
                }
                
                if (!$err) {
                    echo 'Project Added';
                } 

                ob_end_flush();
            ?>

            
        </div>
    </body>
</html>