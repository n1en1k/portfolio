<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
</head>
<body>
	<div class="loginScreen">
<?php session_start(); 
// If user has already logged in, redirect the user
if (!isset($_SESSION['appnienik-login'])) { }

else if (isset($_SESSION['appnienik-login']) || $_SESSION['appnienik-login'] == true) { 
header('location: home.php'); exit();
}
?>

		<h2>Register</h2>

		<form name="registration" action="register.php" method="post">

		<p><label for="email">Email:</label></p>
         	
		<input type="text" name="email" id="email" />
		
		<p><label for="passwd">Password:</label></p>
		
		<input type="password" name="passwd" id="passwd" />
		<br />
		<input type="submit"value="Register" id="register"  name="register" /></td>
						   
		</form>
	</div> <!-- loginScreen -->
</body>
</html>