<?php
// Add new notice

require_once('config.php');
require_once('dbopen.php');

// Get data
$title   = (isset($_REQUEST['title']))   ?
                $_REQUEST['title'] : ''; 
				
$notice   = (isset($_REQUEST['notice']))   ?
                $_REQUEST['notice'] : ''; 

$writer   = (isset($_REQUEST['writer']))   ?
                $_REQUEST['writer'] : ''; 

// Check
$title = mysql_real_escape_string($title);
$notice = mysql_real_escape_string($notice);			   
$writer = mysql_real_escape_string($writer);
						   
$title = htmlspecialchars($title);		   
$notice = htmlspecialchars($notice);		   
$notice = wordwrap($notice, 25, " ", true);
$writer = htmlspecialchars($writer);
			   

// Check for empty values
if($title == "") {
	header("location: addNoticeForm.php"); exit();
}

else if($notice == "") {
	header("location: addNoticeForm.php"); exit();
}

else if($writer == "") {
	header("location: addNoticeForm.php"); exit();
}

// Table add			
$sql = "INSERT INTO noticeboard (
            title,
            notice,
			writer
            ) VALUES (
           '$title',
           '$notice',
		   '$writer'
            );"; 

$result = mysql_query($sql);

require_once('dbclose.php');

header('location: index.php');
?>