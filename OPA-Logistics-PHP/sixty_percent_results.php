<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="overall.css">
        <title>Other Votes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class =" menu">
            <a href="home.php"><img src="yellowrose.png" alt="Yellow Rose" 
             style="width:150px;height:150px;margin-left: 15px;
             margin-top: 0px;"></a>
        <br><br>
        <a href="constitutional_revisions.php"><div class="menuItem">Constitutional Revisions</div></a> <br>
        <a href="dissociation_voting.php"><div class="menuItem">Dissociation Voting</div></a> <br>
        <a href="elections.php"><div class="menuItem">Elections</div></a> <br>
        <a href="vote_in.php"><div class="menuItem">Vote In</div></a> <br>
        <a href="other_votes.php"><div class="menuItem">Other Votes</div></a><br>
        <a href="index.php"><div class="menuItem">Log out</div></a>
        </div>
        <h2 style="position:absolute;margin-left: 225px;margin-top: 25px;">
            Sixty Percent Projects
        </h2>
        <div class="body" style="width: 900px;">
            
            
                <?php

                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }

                    echo "<h3>University Community</h3>";
                    $sqlUC = "SELECT Name, Count(Name) FROM `SixtyPercentVotes` WHERE AreaOfService = 'University Community' GROUP BY Name";
                    if (!$resultUC = $conn->query($sqlUC)) {
                        echo 'ERROR - '.$conn->error;
                    } else {
                        $resultUC->data_seek(0);
                        while($row = $resultUC->fetch_assoc()){
                            echo $row['Name'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(Name)'].'<br>';
                        }
                        $resultUC->close();
                    }

                    //foreach ( $stmtUC as $row) {
                    //    echo $row['Name'];
                    //}
                    echo "<h3>Community at Large</h3>";
                    $sqlCL = "SELECT Name, Count(Name) FROM `SixtyPercentVotes` WHERE AreaOfService = 'Community At Large' GROUP BY Name";
                    if (!$resultCL = $conn->query($sqlCL)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultCL->data_seek(0);
                        while($row = $resultCL->fetch_assoc()){
                            echo $row['Name'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(Name)'].'<br>';
                        }
                        $resultCL->close();
                    }
                    echo "<h3>Members of the Sorority</h3>";
                    $sqlMS = "SELECT Name, Count(Name) FROM `SixtyPercentVotes` WHERE AreaOfService = 'Members of the Sorority' GROUP BY Name";
                    if (!$resultMS = $conn->query($sqlMS)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultMS->data_seek(0);
                        while($row = $resultMS->fetch_assoc()){
                            echo $row['Name'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(Name)'].'<br>';
                        }
                        $resultMS->close();
                    }
                    echo "<h3>Nations of the World</h3>";
                    $sqlNW = "SELECT Name, Count(Name) FROM `SixtyPercentVotes` WHERE AreaOfService = 'Nations of the World' GROUP BY Name";
                    if (!$resultNW = $conn->query($sqlNW)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultNW->data_seek(0);
                        while($row = $resultNW->fetch_assoc()){
                            echo $row['Name'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(Name)'].'<br>';
                        }
                        $resultNW->close();
                    }
                    echo "<h3>Mental Health</h3>";
                    $sqlMH = "SELECT Name, Count(Name) FROM `SixtyPercentVotes` WHERE AreaOfService = 'Mental Health' GROUP BY Name";
                    if (!$resultMH = $conn->query($sqlMH)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultMH->data_seek(0);
                        while($row = $resultMH->fetch_assoc()){
                            echo $row['Name'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(Name)'].'<br>';
                        }
                        $resultMH->close();
                    }
                    echo "<h3>President's Project</h3>";
                    $sqlPP = 'SELECT Name, Count(Name) FROM `SixtyPercentVotes` WHERE AreaOfService = "President Project" GROUP BY Name';
                    if (!$resultPP = $conn->query($sqlPP)) {
                        echo 'ERROR - '. $conn->error;
                    } else {
                        $resultPP->data_seek(0);
                        while($row = $resultPP->fetch_assoc()){
                            echo $row['Name'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(Name)'].'<br>';
                        }
                        $resultPP->close();
                    }
                ?>
               
            
        </div>
    </body>
</html>

