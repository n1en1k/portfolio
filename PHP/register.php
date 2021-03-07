<?php
session_start(); 

// If user has already logged in, redirect the user
if (!isset($_SESSION['appnienik-login'])) { }

else if (isset($_SESSION['appnienik-login']) || $_SESSION['appnienik-login'] == true) { 
header('location: home.php'); exit();
}

// If user has not used the form redirect to the form page
if (!isset($_POST['register'])) {
	header('location: registerForm.html'); exit();
}

// Get data from registerForm
$email = mysql_real_escape_string($_REQUEST['email']); 
$passwd = mysql_real_escape_string($_REQUEST['passwd']); 

// Check for empty values
if($email == "") {
	header('location: registerForm.html'); exit();
}

else if($passwd == "") {
	header('location: registerForm.html'); exit();
}

// Open database connection
require_once('config.php');
require_once('dbopen.php');


$sql = "INSERT INTO users (
            email,
            password
            ) VALUES (
           '$email',
           PASSWORD('$passwd')
            );"; 



$result = mysql_query($sql);


require_once('dbclose.php');


?>

<h2>Success!</h2>
<p><a href="login.php">Login</a>

