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
                <select name="amnd">
                    <option value="">Select</option>
                    <option value="amnd1">Ammendment 1</option>
                    <option value="amnd2">Ammendment 2</option>
                    <option value="amnd3">Ammendment 3</option>
                </select>
                <br>
                <br>
                <br>
                <input type="radio" name="gender" accept="" value="for">
                Yes, I want this in the constitution
                <br>
                <input type="radio" name="gender" value="against">
                No, I do not want this in the constitution
                <br>
                <br>
                <input type="submit" value="Vote!">
            </p>
        </div>
    </body>
</html>