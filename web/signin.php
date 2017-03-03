<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <style>
            html { 
                
                background: url(images/background.jpeg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            body{

                background: none;
            }
            .container{
                border-radius: 25px;
                padding: 20px;
                background: #3c71ae;
                margin-top: 180px;
                color: white;
                text-align: center;
                width: 400px;
            }
            .container a{
                color: lightblue;
            }
            #error{
                text-align: center;
                border-radius: 2px;
                margin-top: 3px;
                background: white;
                color: red;
            }
        </style>
 
    </head>


    <body>
        <div class="container" id="cont">
            <h1>Personal Notebook</h1>


            <form method="post" action="authenticate.php">
                <p>Never lose your notes again!</p>
                <?php
                    if (isset($_SESSION['error'])) {
                        echo "<p>{$_SESSION['error']}</p>";
                        unset($_SESSION['error']);
                    }
                ?>
                <fieldset class="form-group">
                    <input type="text" class="form-control" name="username" required placeholder="Username">
                </fieldset>

            <fieldset class="form-group">
                <input type="password" class="form-control" name="password" required placeholder="Password">
            </fieldset>
                <button class="btn btn-success" >Sign In</button>
            </form>
            <p>Dont have an account? <a href="signup.php">Register</a></p>
        </div>
    </body>
</html>