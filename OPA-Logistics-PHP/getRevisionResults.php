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
            
            <p>
            
                <?php
                
                    session_start();

                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }
                    $_SESSION['deletingVotesFrom'] = $_POST['amndResult'];
                    echo "<h3>Results</h3>";
                    $sql1 = "SELECT vote, Count(vote) FROM CAVotes WHERE ammendment = '";
                    $sql2="' GROUP BY vote";
                    $sql=$sql1.$_POST['amndResult'].$sql2;

                    if (!$result = $conn->query($sql)) {
                        echo 'ERROR - '.$conn->error;
                    } else {
                        $result->data_seek(0);
                        while($row = $result->fetch_assoc()){
                            echo $row['vote'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Count(vote)'].'<br>';
                        }
                        echo "<br><a href='revisionsClearVotes.php'>Clear Votes</a>";
                        $resultUC->close();
                    }
                    
                ?>
               
            </p>
        </div>
    </body>
</html>

