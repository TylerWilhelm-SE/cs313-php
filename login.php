
<?php

	if (array_key_exists("submit", $_POST)) {

		$link = mysqli_connect("localhost", "root", "", "classNotes");
		if (mysqli_connect_error()) {
			die ("Failed to Connect to Database");
		}

		$error = "";

		if (!$_POST['email']){
			$error .= "Please enter your email address.";
		}
		if (!$_POST['password']){
			$error .= "Please enter a password.";
		}
		if ($error != "") {
			$error = "<p>Please complete all fields.</p>".$error;
		}
	 
	else {
		$query = "SELECT id FROM 'users' WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

		$result = mysqli_query($link, $query);

		if (mysql_num_rows($result) > 0) {
			$error = "That email address has been taken.";
		}
		else{
			$query = "INSERT INTO 'users' ('email', 'password') VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."')";

			if(mysqli_query($link, $query)){
				$error = "<p>We could not sign you up.</p>";}
				else{
					echo "Sign up complete";
				}

		}

	}
}



?>
<div id="error"><?php echo $error; ?> </div>




<form method="post">
	<input type="email" name="email" placeholder="Email...">
	<input type="password" name="password" placeholder="Password...">
	<input type="checkbox" name="saveLogin" value="1">
	<input type="submit" name="submit" value="Sign Up Now">

</form>
