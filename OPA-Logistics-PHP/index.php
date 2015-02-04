<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php 
        session_start();
        session_destroy();
    ?>
    <head>
        <link rel="stylesheet" type="text/css" href="overall.css">
        <title>OPA Nu Logistics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-2.1.3.min.js"></script>
    </head>
    <body>
        
        <img src="yellowrose.png" alt="Yellow Rose" style="width:150px;height:150px;margin-left: 45%;margin-top: 20px;">
        <h1>OPA Nu Logistics</h1>
        <div class="loginBox">
            <form name="login" method="post" action="checklogin.php">
                Username:<br>
                <input name="user" type="text" id="user">
                Password: <br>
                <input name="pass" type="password" id="pass">
                <input type="submit" name="Submit" value="Login">
            </form>
            
        </div>

    </body>
</html>
