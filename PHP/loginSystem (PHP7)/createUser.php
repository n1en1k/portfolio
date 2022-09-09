<?php
session_start();
if(isset($_SESSION["id"])) {
    header("location: index.php");
}

require_once('./config.php');


$username   = (isset($_REQUEST['username']))   ?
                $_REQUEST['username'] : ''; 
				
$password   = (isset($_REQUEST['passwd']))   ?
                $_REQUEST['passwd'] : '';

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

if($username == "") {
	header("location: fail.php"); exit();
}

else if($password == "") {
	header("location: fail.php"); exit();
}

 // Prepare an insert statement
    $sql = "INSERT INTO users (username, passwd) VALUES (?, ?)";
     
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
        
        // Set parameters
        $param_username = $username;
        // $password = md5($password);
        $param_password = $password;
        
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records created successfully. Redirect to landing page
            header("location: ./index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);


?>