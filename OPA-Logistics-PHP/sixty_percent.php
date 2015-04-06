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
            <h1>Sixty Percent Projects</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li class="active">Sixty Percent Projects</li>
            </ol>
            
            <form name="vote_sp" method="post" action="submitvote_sp.php">
                <?php

                    session_start();
                
                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }

                    echo "<h3>University Community</h3>";
                    $sqlUC = "SELECT Name FROM SixtyPercentCandidates WHERE AreaOfService ='University Community'";
                    if (!$resultUC = $conn->query($sqlUC)) {
                        echo 'ERROR - '.$conn->error;
                    } else {
                        $resultUC->data_seek(0);
                        while($row = $resultUC->fetch_assoc()){
                            echo '<input type="radio" name="uc" value="'.$row['Name'].'">'.$row['Name'].'<br>';
                        }
                        $resultUC->close();
                    }

                    //foreach ( $stmtUC as $row) {
                    //    echo $row['Name'];
                    //}
                    echo "<h3>Community at Large</h3>";
                    $sqlCL = "SELECT Name FROM SixtyPercentCandidates WHERE AreaOfService ='Community at Large';";
                    if (!$resultCL = $conn->query($sqlCL)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultCL->data_seek(0);
                        while($row = $resultCL->fetch_assoc()){
                            echo '<input type="radio" name="cl" value="'.$row['Name'] . '">'.$row['Name'].'<br>';
                        }
                        $resultCL->close();
                    }
                    echo "<h3>Members of the Sorority</h3>";
                    $sqlMS = "SELECT Name FROM SixtyPercentCandidates WHERE AreaOfService ='Members of the Sorority';";
                    if (!$resultMS = $conn->query($sqlMS)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultMS->data_seek(0);
                        while($row = $resultMS->fetch_assoc()){
                            echo '<input type="radio" name="ms" value="'.$row['Name'].'">'.$row['Name'].'<br>';
                        }
                        $resultMS->close();
                    }
                    echo "<h3>Nations of the World</h3>";
                    $sqlNW = "SELECT Name FROM SixtyPercentCandidates WHERE AreaOfService ='Nations of the World';";
                    if (!$resultNW = $conn->query($sqlNW)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultNW->data_seek(0);
                        while($row = $resultNW->fetch_assoc()){
                            echo '<input type="radio" name="nw" value="'.$row['Name'].'">'.$row['Name'].'<br>';
                        }
                        $resultNW->close();
                    }
                    echo "<h3>Mental Health</h3>";
                    $sqlMH = "SELECT Name FROM SixtyPercentCandidates WHERE AreaOfService ='Mental Health';";
                    if (!$resultMH = $conn->query($sqlMH)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultMH->data_seek(0);
                        while($row = $resultMH->fetch_assoc()){
                            echo '<input type="radio" name="mh" value="'.$row['Name'].'">'.$row['Name'].'<br>';
                        }
                        $resultMH->close();
                    }
                    echo "<h3>President's Project</h3>";
                    $sqlPP = 'SELECT Name FROM SixtyPercentCandidates WHERE AreaOfService ="President Project";';
                    if (!$resultPP = $conn->query($sqlPP)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultPP->data_seek(0);
                        while($row = $resultPP->fetch_assoc()){
                            echo '<input type="radio" name="pp" value="'.$row['Name'].'">'.$row['Name'].'<br>';
                        }
                        $resultPP->close();
                    }
                ?>
                <br>
                <br>
                <input type="submit" name="Submit" value="Vote">
            </form>
             <?php
                if ($_SESSION['user'] == 'exec') {
                    echo "<br><a href='sixty_percent_results.php'>View Results</a>";
                    echo "<br><a href='sixty_percent_add.php'>Add a project</a>";
                }
        ?>
        </div>
       
    </body>
</html>