<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title><meta charset="utf-8">
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

        
        <form method="post" action="createaccount.php">
            <p>Never lose your notes again!</p>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p id=\"error\">{$_SESSION['error']}</p>";
            }
            ?>
            <?php
                    if (isset($_SESSION['error'])) {
                        echo "<span id=\"error\"></span>";
                    }
                ?>
            <?php
                if (isset($_SESSION['error'])) {
                    echo "<span id=\"error\"></span>";
                    unset($_SESSION['error']);
                }
            ?>
            <fieldset class="form-group">
                <input type="text" class="form-control" name="username" required placeholder="Username">
            </fieldset>

            <fieldset class="form-group">
                <input type="password" class="form-control" name="password" required placeholder="Password, including a number" pattern="(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){7,}">

                
            </fieldset>

            <fieldset class="form-group">
                <input type="password" class="form-control" name="verify_password" required placeholder="Verify password" pattern="(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){7,}">
                
            </fieldset>
            <button class="btn btn-success" >Sign Up</button>
        </form>
        <p>Already have an account? <a href="signin.php">Sign In</a></p>
        </div>


            <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </body>
</html>
