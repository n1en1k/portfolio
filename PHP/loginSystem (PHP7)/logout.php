<?php
    session_start();
    if(!isset($_SESSION["id"])) {
        header("location: ./index.php");
    }
    else {
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    echo "<h3>Logout successful!<h3>";
    echo "<h4><a href='index.php'>Link back to home page</a><h3>";
    }
?>