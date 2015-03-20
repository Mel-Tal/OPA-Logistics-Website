<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <?php 
        session_start();
        session_destroy();
    ?>
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
    <body style-="width:80%">
        <div class="container-fluid" style="margin-bottom: 20px">
            <h1 style="text-align: center"><br>Log In to Vote</h1>
        </div>
        <div class="container-fluid" style="text-align: center">
            <div class="loginBox">
                <form name="login" method="post" action="checklogin.php">
                    Username:<br>
                    <input name="user" type="text" id="user"><br>
                    Password: <br>
                    <input name="pass" type="password" id="pass"><br><br>
                    <input type="submit" name="Submit" value="Login">
                </form>
            </div>
        </div>

    </body>
</html>
