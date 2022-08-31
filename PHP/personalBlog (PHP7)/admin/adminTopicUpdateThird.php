<?php

if(!isset($_REQUEST['id'])) header('location: index.php');

$edit = $_REQUEST['id'];
$edit = htmlspecialchars($edit);

require_once('./config.php');


// Otetaan data talteen:
$title   = (isset($_REQUEST['title']))   ?
                $_REQUEST['title'] : ''; 
				
$blogpost   = (isset($_REQUEST['blogpost']))   ?
                $_REQUEST['blogpost'] : ''; 

$writer   = (isset($_REQUEST['writer']))   ?
                $_REQUEST['writer'] : ''; 


$title = htmlspecialchars($title);
$blogpost = htmlspecialchars($blogpost);
$writer = htmlspecialchars($writer);


    // Prepare an update statement
    $sql = "UPDATE blogposts SET title=?, blogpost=?, writer=? WHERE id=?";
     
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssi", $param_title, $param_blogpost, $param_writer, $param_id);
        
        // Set parameters
        $param_title = $title;
        $param_blogpost = $blogpost;
        $param_writer = $writer;
        $param_id = $edit;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);

?>