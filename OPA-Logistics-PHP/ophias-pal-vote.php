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
            <h1>Ophia's Pal</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="other_votes.php">Other Votes</a></li>
                <li class="active">Ophia's Pal</li>
            </ol>
            
            <h3>Candidates</h3>
            
            <form name="vote_sp" method="post" action="ophias-pal-submit.php">
                <input type="radio" name="name" value="Abstain" checked="">Abstain<br>
                <?php

                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }

                    $sql = "SELECT Name FROM OphiasPalCandidates";
                    if (!$result = $conn->query($sql)) {
                        echo 'ERROR - '.$conn->error;
                    } else  if ($result->num_rows > 0){
                        
                        $result->data_seek(0);
                        while($row = $result->fetch_assoc()){
                            echo '<input type="radio" name="name" value="'.$row['Name'].'">'.$row['Name'].'<br>';
                        }
                        //$resultUC->close();Why does this mess everything up?
                    }
                    else {
                        echo 'No Candidates';
                    }
                ?>
                <br>
                <br>
                <input type="submit" name="Submit" value="Vote">
            </form>
            <?php
                if ($_SESSION['user'] == 'exec') {
                    echo "<br><a href='ophias-pal-results.php'>View Results</a>";
                    echo "<br><a href='ophias-pal-add.php'>Add a candidate</a>";
                    echo "<br><a href='ophias-pal-clear-votes.php'>Clear Votes</a>";
                }
            ?>
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

