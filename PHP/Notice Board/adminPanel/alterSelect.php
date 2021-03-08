<html>
	<head>
		<title>Admin Page - Alter</title>
		<link rel="stylesheet" href="../css/styles.css" type="text/css" />
	</head>
	<body>
		<div class="loginScreen">
<h4>Click the ID number to alter selected notice!</h4>

<?php

require_once('config.php');
require_once('dbopen.php');

//query
$query = "SELECT id, title, notice, writer, DATE_FORMAT(timestampy, '%d.%m.%Y') AS timest FROM noticeboard ORDER BY timestampy DESC LIMIT 100;";
$result= mysql_query($query)
    or die("Error on sql.: " . mysql_error());

	echo "<table><tr>
	<td><b>ID</b></td>
	<td><b>TITLE</b></td>
	<td><b>NOTICE</b></td></tr><tr>
	<td colspan='2' style='border-bottom: 1px solid #000;'><b>WRITER</b></td>
	<td style='border-bottom: 1px solid #000;'><b>TIMESTAMP</b></td>
	
	</tr>";

while ($row = mysql_fetch_array ($result)) {
   echo 
   "<tr><td><a style='color: #FF0000;' href='alterForm.php?alter={$row['id']}'>{$row['id']}</a></td>" .
   "<td>{$row['title']}</td>" .
   "<td>{$row['notice']}</td></tr><tr>" .
   "<td colspan='2' style='border-bottom: 1px solid #000;'>{$row['writer']}</td>" .
   "<td style='border-bottom: 1px solid #000;'>{$row['timest']}</td></tr>";
} 

echo "</table>";

require_once('dbclose.php');

?>
		</div> <!-- loginScreen -->
	</body>
</html>