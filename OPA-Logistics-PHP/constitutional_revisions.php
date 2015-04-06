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
            <h1>Constitutional Revisions</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li class="active">Constitutional Revisions</li>
            </ol>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Ammendments</h3>
                    <p>
                        Which ammendment are you voting for?<br>
                    <form name="getRevision" method="post" action="getRevision.php">
                            <?php

                            session_start();

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
                <div class="col-sm-6">
                    <?php
                        if ($_SESSION['user'] == 'exec') {
                            echo '<h3>Exec Options</h3>';
                            echo '<p>';
                            echo 'Which ammendment do you want to view?<br>';
                            echo '<form name="getRevision" method="post" action="getRevisionResults.php">';

                                if (!$conn = new mysqli($host, $user, $pass, $db_name)){
                                    echo 'ERROR - Could Not connect to database';
                                }

                                $sql = "SELECT *  FROM ConstitutionalAmmendment";
                                if (!$result = $conn->query($sql)) {
                                    echo 'ERROR - '.$conn->error;
                                } else  if ($result->num_rows > 0){
                                    echo '<select name="amndResult">';
                                    $result->data_seek(0);
                                    echo 'result obtained<br>';
                                    while($row = $result->fetch_assoc()){
                                        //$ammendment = $row['id'];
                                        //$page = $row['pageName'];
                                        echo '<option value="' , $row['id'] , '">' , $row['id'] , '</option><br>';
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
                            echo '</select>';
                            echo '<br>';
                            echo '<br>';
                            echo '<input type="submit" value="Go">';
                            echo '</form>';
                            echo '</p>';
                        }
                    ?>
                </div>
            </div>
            
            
        </div>
    </body>
</html>