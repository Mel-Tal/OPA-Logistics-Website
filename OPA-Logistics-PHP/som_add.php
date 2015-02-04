<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include('checklogin.php');?>
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
            Nominate a Sister
        </h2>
        <div class="body" style="width: 900px;">
            
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