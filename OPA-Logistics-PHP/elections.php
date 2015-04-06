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
            <h1>Elections</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li class="active">Elections</li>
            </ol>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Select a Position</h3>
                    <p><a class="btn btn-primary btn" href="elect_president.php" role="button" style="width: 150px">President</a></p>
                    <p><a class="btn btn-primary btn" href="elect-vp.php" role="button" style="width: 150px">Vice President</a></p>
                    <p><a class="btn btn-primary btn" href="elect-service.php" role="button" style="width: 150px">Service</a></p>
                    <p><a class="btn btn-primary btn" href="elect-treasurer.php" role="button" style="width: 150px">Treasurer</a></p>
                    <p><a class="btn btn-primary btn" href="elect-secretary.php" role="button" style="width: 150px">Secretary</a></p>
                    <p><a class="btn btn-primary btn" href="elect-membership.php" role="button" style="width: 150px">Membership</a></p>
                    <p><a class="btn btn-primary btn" href="elect-sisterhood.php" role="button" style="width: 150px">Sisterhood</a></p>
                    <p><a class="btn btn-primary btn" href="elect-alum.php" role="button" style="width: 150px">Alumni Liason</a></p>
                </div>
                <div class="col-sm-6">
                    <?php
                        session_start();
                        if ($_SESSION['user'] == 'exec') {
                            echo "<h3>Manage Results</h3>";
                            echo '<p><a class="btn btn-primary btn" href="results_president.php" role="button" style="width: 200px">President Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_pres.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_vp.php" role="button" style="width: 200px">Vice President Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_vp.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_ser.php" role="button" style="width: 200px">Service Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_ser.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_treasurer.php" role="button" style="width: 200px">Treasurer Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_tres.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_sec.php" role="button" style="width: 200px">Secretary Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_sec.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_mem.php" role="button" style="width: 200px">Membership Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_mem.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_sis.php" role="button" style="width: 200px">Sisterhood Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_sis.php" role="button">clear</a></p>';
                            echo '<p><a class="btn btn-primary btn" href="results_alum.php" role="button" style="width: 200px">Alumni Liason Results</a>';
                            echo '&nbsp;<a class="btn btn-primary btn" href="clear_alum.php" role="button">clear</a></p>';
                        }
                    ?>
                                        
                </div>
            </div>
            
        </div>
    </body>
</html>