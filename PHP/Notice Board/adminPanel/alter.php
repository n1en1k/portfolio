<?php
// Check that user has used the alterForm.php
if(!isset($_REQUEST['id'])) { header('location: index.php'); exit(); }

$mod = $_REQUEST['id'];

require_once('config.php');
require_once('dbopen.php');

// Get data
$title   = (isset($_REQUEST['title']))   ?
                $_REQUEST['title'] : ''; 
				
$notice   = (isset($_REQUEST['notice']))   ?
                $_REQUEST['notice'] : ''; 

$writer   = (isset($_REQUEST['writer']))   ?
                $_REQUEST['writer'] : ''; 

// Check chars
$title = mysql_real_escape_string($title);
$notice = mysql_real_escape_string($notice);
$writer = mysql_real_escape_string($writer);

$title = htmlspecialchars($title);
$notice = htmlspecialchars($notice);
$writer = htmlspecialchars($writer);

// query				
$sql = "UPDATE noticeboard 
            SET title='$title', notice='$notice', writer='$writer'
			WHERE id = '$mod';
			";

$result = mysql_query($sql);

require_once('dbclose.php');

header('location: index.php');
?>