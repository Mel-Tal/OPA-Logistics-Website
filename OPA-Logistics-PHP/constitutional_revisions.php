<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="overall.css">
        <title>Constitutional Revisions</title>
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
            Constitutional Revisions
        </h2>
        <div class="body" style="width: 900px;">
            <h3>Ammendments</h3>
            <p>
                Which ammendment are you voting for?<br>
            <form name="getRevision" method="post" action="getRevision.php">
                    <?php

                    $host="localhost";
                    $user="talltech_mt"; 
                    $pass="julia1996";
                    $db_name="talltech_ophiavotes";

                    if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                        echo 'ERROR - Could Not connect to database';
                    }

                    $sql = "SELECT *  FROM ConstitutionalAmmendment";
                    if (!$result = $conn->query($sql)) {
                        echo 'ERROR - '.$conn->error;
                    } else  if ($result->num_rows > 0){
                        echo '<select name="amnd">';
                        $result->data_seek(0);
                        echo 'result obtained<br>';
                        while($row = $result->fetch_assoc()){
                            //$ammendment = $row['id'];
                            //$page = $row['pageName'];
                            echo '<option value="' , $row['pageName'] , '">' , $row['id'] , '</option>';
                            //echo $ammendment , "    " , $page;
                            //echo '<br>ln<br>';
                        }
                        echo 'done looping through results';
                        echo '</select>';
                        //$resultUC->close();Why does this mess everything up?
                    }
                    else {
                        echo 'No Ammendments';
                    }
                ?>
                </select>
                <br>
                <br>
                <input type="submit" value="Go">
            </form>
            </p>
        </div>
    </body>
</html>