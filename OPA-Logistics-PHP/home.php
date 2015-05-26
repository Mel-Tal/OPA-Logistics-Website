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
        <?php
            if ($_SESSION['success'] == 1) {
                echo '<div class="alert alert-success alert-dismissable">'
                    . '<button type="button" class="close" data-dismiss="alert"'
                            . 'aria-hidden="true">'
                            . '&times;'
                        . '</button>'
                        . 'Vote Submitted Sucessfully'
                    . '</div>';
                   $_SESSION['success'] = 0;
            }
        ?>
        <div class="jumbotron" style="background-color: lightskyblue">
            <h1>
            <?php
                   if ($_SESSION['user'] == 'sister') {
                       echo "Sister Home</h1><p>Welcome to our new voting web site. "
                       . "Here, you can vote on anything from Sister of the Month to "
                               . "next year's exec board. Please select the category of "
                               . "the item you wish to vote on from the options below. "
                               . "If you do not see what you are looking for try looking "
                               . "under other votes.</p>";
                   }
                   else {
                       echo "Exec Board Home</h1><p>Welcome to our new voting web site. "
                       . "Here, you can vote on any elections being held, as well as add "
                               . "and remove candidates, clear all votes. and open and "
                               . "close elections.";
                   }
            ?>
        </div>
        <div class="container" style="background-color: white">
            <div class="container-fluid"
                 <div class="row">
                     <div class="col-sm-4">
                         <h3>Constitutional Revisions</h3>
                         <p>All active sisters are required to attend at least one of the two
                         discussion days (February 17th & 24th) and the voting day (March 3rd).
                         <br> </p>
                         <p><a class="btn btn-primary btn-lg" href="constitutional_revisions.php" role="button">Go ></a></p>
                     </div> 
                    <div class="col-sm-4">
                        <h3>Dissociation Voting</h3>
                        <p>There is no dissociation voting this semester!
                         <br> </p>
                        <p><a class="btn btn-primary btn-lg" href="dissociation_voting.php" role="button">Go ></a></p>
                    </div>
                     <div class="col-sm-4">
                         <h3>Elections</h3>
                         <p>Elections will be held on Tuesday March 24th. The elections slate opens
                             three weeks prior to elections (March 3rd) and closes one week prior (March 17th).
                         <br> </p>
                         <p><a class="btn btn-primary btn-lg" href="elections.php" role="button">Go ></a></p>
                     </div>
                </div>
            <div class="container-fluid"
                <div class="row">
                     <div class="col-sm-4">
                         <h3>Sister of the Month</h3>
                         <p>Sister of the month is voted on at the first chapter of each month.
                             The sister of the month is someone who has gone above and beyond 
                             during the previous month.
                         <br> </p>
                         <p><a class="btn btn-primary btn-lg" href="sister_of_the_month.php" role="button">Go ></a></p>
                     </div> 
                    <div class="col-sm-4">
                        <h3>Other Votes</h3>
                        <p>If you don't see what you're looking for above, look here.
                         <br> </p>
                        <p><a class="btn btn-primary btn-lg" href="other_votes.php" role="button">Go ></a></p>
                    </div>
                     <div class="col-sm-4">
                         <h3>Log out</h3>
                         <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Bye</a></p>
                     </div>
                </div>
            </div>
        </div>
    </body>
</html>
