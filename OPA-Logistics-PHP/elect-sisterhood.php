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
            <h1>Sisterhood Director</h1>
        </div>
        <div class="container" style="background-color: white">
             <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="elections.php">Elections</a>
                <li class="active">Sisterhood Director</li>
            </ol>
            
            <div class="row">
                <div class="col-sm-9">
                    <h3>Vote</h3>

                    <form name="vote_sis" method="post" action="vote_sis.php">
                        Type the number of the candidate you wish to vote for, if you wish to abstain, 
                        put 0.<br>
                        <input type="password" name="vote">
                        <br>
                        <br>
                        <input type="submit" name="Submit" value="Vote">
                    </form>
                </div>
                <div class="col-sm-3">
                    <h3>Candidates</h3>
                    <ol>
                        <li>Melissa Tallant</li>
                        <li>Dot Cannella</li>
                    </ol>
                </div>
            </div>
        </div>
    </body>
</html>
