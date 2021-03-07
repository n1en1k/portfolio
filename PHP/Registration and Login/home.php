<?php
session_start();
// Page where only logged in users get
if (!isset($_SESSION['appnienik-login'])) {
header('location: login.php'); exit();
}

$loggedInEmail = $_SESSION['email'];


echo "<h1>Hello $loggedInEmail!</h1>";

?>