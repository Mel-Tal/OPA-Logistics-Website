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
            <h1>Selective Rush</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="other_votes.php">Other Votes</a></li>
                <li class="active">Selective Rush</li>
            </ol>
            
            <h3>Select an Option</h3>
            
            <form name="vote_sp" method="post" action="selective-rush-submit.php">
                <input type="radio" name="vote" value="abstain" checked="">Abstain<br>
                <input type="radio" name="vote" value="for">Yes, I want us to have selective rush<br>
                <input type="radio" name="vote" value="against">No, I do not want us to have selective rush<br>
                <br>
                <br>
                <input type="submit" name="Submit" value="Vote">
            </form>
            <?php
                if ($_SESSION['user'] == 'exec') {
                    echo "<br><a href='selective-rush-results.php'>View Results</a>";
                    echo "<br><a href='selective-rush-clear.php'>Clear Votes</a>";
                }
            ?>
        </div>
    </body>
</html>
