<?php

require_once('db.php');

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: signin.php');
    exit();
}

$query = 'SELECT username FROM account WHERE id = :id LIMIT 1;';
$stmt = $db->prepare($query);
$stmt->bindValue(':id', $_SESSION['user'], PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$username = $result[0]['username'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8" >
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
                margin-top: 80px;
                color: white;
                
                width: 400px;
            }
            .container button{
                padding-top: 10px;
            }
            .container a{
            	text-decoration: none;
                color: white;
            }
            .container ul{
            	list-style: none;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="myaccount.php">My Account</a>
      <a class="nav-item nav-link" href="displayClasses.php">Classes</a>
      <a class="nav-item nav-link" href="signout.php">Sign Out</a>
    </div>
  </div>
</nav>
        <form>
 
  <div class="form-group container">
	<ul>
	   <li><a href="displayNotes.php?course='1'">CS 313</a></li>
	  	<li><a href="displayNotes.php?course='2'">CIT 336</a></li>
	  	<li><a href="displayNotes.php?course='3'">CS 301B</a></li>
	  	<li><a href="displayNotes.php?course='4'">CS 364</a></li>
  	</ul>

  </div> 
</form>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>