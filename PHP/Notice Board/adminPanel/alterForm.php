<?php
// Redirect if user has not used the alterSelect.php and selected a row
if(!isset($_GET['alter'])) { header('location: alterSelect.php'); exit(); }

$mod = $_GET['alter'];

require_once('config.php');
require_once('dbopen.php');

//Kysely
$query = "SELECT id, title, notice, writer FROM noticeboard WHERE id = '$mod';";
$result= mysql_query($query)
    or die("Error on conn.: " . mysql_error());


// Käydään rivejä niin kauan kuin niitä riittää
while ($row = mysql_fetch_array ($result)) {
   echo 	 
	"<form method='post' action='alter.php'>

	Title: <br />
	<input type='text' name='title' size='50' value='{$row['title']}' /><br />
	Notice: <br />
	<textarea name='notice' rows='5' cols='50'>{$row['notice']}</textarea><br />
	Writer: <br />
	<input type='text' value='{$row['writer']}' name='writer' /><br />


	<input type='hidden' value='{$row['id']}' name='id' />
	<input type='submit' value='Save' name='Save' />

	</form>";
		 

} 

require_once('dbclose.php');

?>