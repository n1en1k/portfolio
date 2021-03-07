<?php 
session_start(); 

if (isset($_SESSION['appnienik-login'])) { 
    unset($_SESSION['appnienik-login']); 
} 

header("Location: login.php"); 
?>