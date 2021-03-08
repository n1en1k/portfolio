<html>
<head>
	<title>Home for Logged In Users</title>
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
</head>
<body>
	<div class="loginScreen">
<?php
session_start();
// Page where only logged in users get
if (!isset($_SESSION['appnienik-login'])) {
header('location: login.php'); exit();
}

$loggedInEmail = $_SESSION['email'];


echo "<h1>Hello $loggedInEmail!</h1>";

?>

	</div> <!-- loginScreen -->
</body>
</html>