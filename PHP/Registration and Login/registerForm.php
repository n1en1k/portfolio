<?php session_start(); 
// If user has already logged in, redirect the user
if (!isset($_SESSION['appnienik-login'])) { }

else if (isset($_SESSION['appnienik-login']) || $_SESSION['appnienik-login'] == true) { 
header('location: home.php'); exit();
}
?>

<h2>Register</h2>

<form name="registration" action="register.php" method="post">

Email:
<br />           	
<input type="text" name="email" />
<br />
Password:
<br /> 
<input type="password" name="passwd" />
<br />
<input type="submit"value="Register" name="register" /></td>
                   
</form>