<?php
session_start();
if(isset($_SESSION["id"])) {
    header("location: index.php");
}
?>
<h2>Login</h2>
<form name="loginform" action="login.php" method="post">
    Username: 
    <input type="text" name="username" id="username" /><br />
    Password: 
    <input type="password" name="passwd" id="passwd" /><br /><br />
    <input type="submit" value="Login" name="login" />
</form>