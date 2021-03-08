<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
</head>
<body>
	<div class="loginScreen">
<?php
session_start(); 

// If user has already logged in, redirect the user
if (!isset($_SESSION['appnienik-login'])) { }

else if (isset($_SESSION['appnienik-login']) || $_SESSION['appnienik-login'] == true) { 
header('location: home.php'); exit();
}
				
$errmsg = ''; 
if (isset($_REQUEST['email']) AND isset($_REQUEST['passwd'])) { 
require_once('config.php');
require_once('dbopen.php');

   $email = mysql_real_escape_string($_REQUEST['email']); 
   $passwd = mysql_real_escape_string($_REQUEST['passwd']); 

   $sql = "SELECT userid, email, password
            FROM users 
            WHERE email = '$email' AND password = PASSWORD('$passwd')"; 
     
    $result = mysql_query($sql) or die('Failure. ' . mysql_error());  
     
    if (mysql_num_rows($result) == 1) { 
	
        $_SESSION['appnienik-login'] = true; 
        $_SESSION['email'] = $_POST['email'];
		 while ($row = mysql_fetch_array ($result)) {
   

		$id = $row['userid'];
		 
		$_SESSION['id'] = $id;
		}
		
        header('location: home.php'); 
		exit; 
    }
	else { 
        $errmsg = '
			<p>Error - check login info!</p>
		'; 
    } 
    require_once('dbclose.php'); 
} 

if ($errmsg != '')echo $errmsg; 
?>

		<h1>Login</h1>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
			<p><label for="email">Email:</label></p>

			<input type="text" name="email" id="email" />

			<p><label for="passwd">Password:</label></p>

			<input type="password" name="passwd" id="passwd" />

			<input type='submit' id='action' name='action' value='Login' />

			<p>Or <a href="registerForm.php"><b>Register</b></a></p> 
		</form>
	</div> <!-- loginScreen -->
</body>
</html>