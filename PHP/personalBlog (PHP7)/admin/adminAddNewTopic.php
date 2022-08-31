<?php

require_once('./config.php');


$title   = (isset($_REQUEST['title']))   ?
                $_REQUEST['title'] : ''; 
				
$blogpost   = (isset($_REQUEST['blogpost']))   ?
                $_REQUEST['blogpost'] : ''; 

$writer   = (isset($_REQUEST['writer']))   ?
                $_REQUEST['writer'] : ''; 

if($title == "") {
	header("location: fail.php"); exit();
}

else if($blogpost == "") {
	header("location: fail.php"); exit();
}

else if($writer == "") {
	header("location: fail.php"); exit();
}


$title = htmlspecialchars($title);

$blogpost = htmlspecialchars($blogpost);

$blogpost = wordwrap($blogpost, 25, " ", true);

$writer = htmlspecialchars($writer);


 // Prepare an insert statement
    $sql = "INSERT INTO blogposts (title, blogpost, writer) VALUES (?, ?, ?)";
     
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $param_title, $param_blogpost, $param_writer);
        
        // Set parameters
        $param_title = $title;
        $param_blogpost = $blogpost;
        $param_writer = $writer;
        
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