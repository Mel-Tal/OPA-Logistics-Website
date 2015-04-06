<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include('checklogin.php');?>
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
            <h1>Sisterhood Director Results</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="elections.php">Elections</a>
                <li class="active">Sisterhood Results</li>
            </ol>
            
           <div class="row">
                <div class="col-sm-9">
                    <h3>Results</h3>

                    <?php

                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }

                    $sql = "SELECT vote, Count(vote) FROM `ElectionsVotes` WHERE position = 'sisterhood' GROUP BY vote";
                    if (!$result = $conn->query($sql)) {
                        echo 'ERROR - '.$conn->error;
                    } else {
                        $result->data_seek(0);
                        while($row = $result->fetch_assoc()){
                            echo $row['vote'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(vote)'].'<br>';
                        }
                        $resultUC->close();
                    }
                    ?>
                </div>
            </div>
    </body>
</html>