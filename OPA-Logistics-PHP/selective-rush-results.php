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
            <h1>Sister of the Month</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="other_votes.php">Other Votes</a></li>
                <li><a href="selective-rush.php">Selective Rush</a>
                <li class="active">Selective Rush Results</li>
            </ol>
            
            
                <?php

                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";
                    
                    session_start();

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }

                    echo "<h3>Results</h3>";
                    $sql = "SELECT vote, Count(vote) FROM `SelectiveRush`GROUP BY vote";
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
    </body>
</html>


