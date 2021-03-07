<?php
// test connection

if ($dbtype == "mysql") {
   $conn = mysql_connect($dbhost, $dbuser, $dbpass)
       or die('Could not connect: ' . mysql_error());
   mysql_select_db($dbname, $conn);
}
?>

