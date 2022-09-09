<?php
session_start();
if(isset($_SESSION["id"])) {
    header("location: index.php");
}

// Check existence of id parameter before processing further
if(isset($_POST["username"]) && !empty(trim($_POST["username"]))){
    // Include config file

    $username = $_POST["username"];
    $password = $_POST["passwd"];
    $username = htmlspecialchars($username);
    $username = htmlspecialchars($password);


    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM users WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_user);
        
        // Set parameters
        $param_user = $username;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $id = $row["id"];
                $usrname = $row["username"];
                $passwd = $row["passwd"];
                
                // $passwd = md5($passwd);

                if($username == $usrname && $password == $passwd) {
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $usrname;
                    header("location: index.php");
                }
                else {
                    // wrong password
                    header("location: error.php");
                    exit();
                }
                
                
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}


?>