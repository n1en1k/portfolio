<?php
// set page settings
$pageTitle = "Personal Blog - Admin Edit Topic";

// html page header
require_once("./header.php");

// in between this comes page code
?>
<?php

if(!isset($_GET['edit'])) header('location: index.php');

$edit = $_GET['edit'];
$edit = htmlspecialchars($edit);

require_once('./config.php');


    // Prepare a select statement
    $sql = "SELECT * FROM blogposts WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = $edit;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                echo "
                <h2>Edit Topic</h2>
                <table>
                <form name='blogform' action='adminTopicUpdateThird.php' method='post'>
                    <tr><td><h4>Title:</h4></td>
                    <td><input type='text' name='title' id='title' value='{$row['title']}' /></td></tr>
                    <tr><td><h4>Blogpost:</h4></td>
                    <td><textarea id=blogpost' name='blogpost'>{$row['blogpost']}</textarea></td></tr>
                    <tr><td><h4>writer:</h4></td>
                    <td><input type='text' name='writer' id='writer' value='{$row['writer']}' /></td></tr>
                    <input type='hidden' value='{$row['id']}' name='id' />
                    <tr><td colspan='2' class='submitBtn'><input type='submit' value='Save' name='save' /></td></tr>
                </form>
                </table>
            ";
       
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: .index.php");
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

?>
<?php
// in between this comes page code

// html page footer
require_once("./footer.php");
?>