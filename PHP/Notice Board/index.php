<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<title>Notice Board</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
</head>
<body>
	<div class="loginScreen">
		<h2>Notice Board</h2> 
		<!-- Link for users to add their own notice -->
		<p><a style="color: #448a3e;" href="addNoticeForm.php"><b>Add Notice</b></a></p>

<?php
// Open connection and echo notices
require_once('config.php');
require_once('dbopen.php');


$query = "SELECT id, title, notice, writer, DATE_FORMAT(timestampy, '%d.%m.%Y') AS timest FROM noticeboard ORDER BY timestampy DESC LIMIT 100;";
$result= mysql_query($query)
    or die("Error on sql.: " . mysql_error());


while ($row = mysql_fetch_array ($result)) {
		 $title = $row['title'];
		 $notice = $row['notice'];
		 $writer = $row['writer'];
		 $timest = $row['timest'];
		 
		 $title = htmlspecialchars($title);
		 
		 $writer = htmlspecialchars($writer);
		 $timest = htmlspecialchars($timest);
		 
		$notice = nl2br($notice);

		 echo "<h3>$title</h3>\n";
		 echo "<p>$notice</p>\n";
		 echo "<h5>Writer: $writer - Date: $timest</h5>\n<hr />";
		 
} 

require_once('dbclose.php');

?>
	</div> <!-- loginScreen -->
</body>
</html>