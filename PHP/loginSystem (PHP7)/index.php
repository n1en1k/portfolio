<?php
session_start();
if(isset($_SESSION["id"])) {
    $loggedusersid = $_SESSION["id"];
    $loggedusersname = $_SESSION["username"];
    
    // show logged in content with link to logout

    echo "<h1>Welcome, $loggedusersname!</h1>";
    echo "<h4><a href='logout.php'>Logout</a></h4>";

}
else {
    // show default index with link to login

    echo "<h1>If you have an user, please login</h1>";

    echo "<h4><a href='loginForm.php'>Login</a></h4>";

    echo "<h1>Register here:</h1>";

    echo "<h4><a href='createUserForm.php'>Register</a></h4>";
}
?>