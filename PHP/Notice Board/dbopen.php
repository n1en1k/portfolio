<?php
// dbopen.php

// Open and test connection
if ($dbtype == "mysql") {
   $conn = mysql_connect($dbhost, $dbuser, $dbpass)
       or die('Couldnt connect: ' . mysql_error());
   mysql_select_db($dbname, $conn);
}
?>

