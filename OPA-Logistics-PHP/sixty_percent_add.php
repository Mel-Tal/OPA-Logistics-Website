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
            Add a Sixty Percent Project
        </h2>
        <div class="body" style="width: 900px;">
            
            <form name="vote_sp" method="post" action="sixty_percent_add.php">
                <h3>Name of Projet:</h3>
                <input type ="text" name="Name" id ="name">
                <h3>Area of Service:</h3>
                <input type ="text" name="AreaOfService" id ="aos">
                <br>
                <br>
                <input type="submit" name="Submit" value="Vote">
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
                    echo 'ERROR'.$conn->error."<br>";
                    echo $add;
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