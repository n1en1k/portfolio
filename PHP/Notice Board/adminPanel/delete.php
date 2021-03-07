<?php 

// Redirect if user has not used the deleteForm.php and selected a row
if(!isset($_GET['del'])) { header('location: deleteForm.php'); exit() }

// Get ID to del
$deleteRow = $_GET['del'];

require_once('config.php');
require_once('dbopen.php');
				
$sql = "DELETE FROM noticeboard 
			WHERE id = '$deleteRow';
			"; 

$result = mysql_query($sql);

require_once('dbclose.php');

header('location: index.php');
?>