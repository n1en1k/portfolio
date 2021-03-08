<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<title>Gameshow - Monty Hall problem - stageOne</title>
</head>
<body>
<?php

$doors = array(1,2,3);

// Winning door
$prize = $doors[array_rand($doors)];

$picked = $_POST['door'];

$remaining = array();
	
	for ($i=0; $i<3; $i ++)
	{
		switch($doors[$i])
		{
			case $prize:
				break;
			case $picked:
				break;
			default:
				array_push($remaining,$doors[$i]);
		}		
	}
$opened = $remaining[array_rand($remaining)];
echo "<h2>You have choosen door number $picked...";
echo "<h3>Aaaaand...</h3>";	
echo "<h2>The Host has opened one door for you and it is door number $opened and the Gameshow Host now asks you: Do you want to switch or stick your original pick?</h2>";
?>


<table>
<form method="post" action="stageTwo.php">
	<tr>

<?php

if($opened == 1) {
echo "<td><img src='donkey.gif' alt='doorone-open' /></td>
<td><img src='doortwo.gif' alt='doortwo' /></td>
<td><img src='doorthree.gif' alt='doorthree' /></td>";
}

elseif($opened == 2) {
echo "<td><img src='doorone.gif' alt='doorone' /></td>
<td><img src='donkey.gif' alt='doortwo-open' /></td>
<td><img src='doorthree.gif' alt='doorthree' /></td>";
}
elseif($opened == 3) {
echo "<td><img src='doorone.gif' alt='doorone' /></td>
<td><img src='doortwo.gif' alt='doortwo' /></td>
<td><img src='donkey.gif' alt='doorthree-open' /></td>";
}



echo "<input type='hidden' value='$picked' name='selectedDoor' />";
echo "<input type='hidden' value='$prize' name='winningDoor' />";
echo "<input type='hidden' value='$opened' name='openedDoor' />";
echo "<input type='hidden' value='$doors' name='doors' />";

?>
	</tr>
	<tr align="center">
		<td colspan="3"><input type='radio' name='newSelect' value='0' /> I switch!</td>
	</tr>
	<tr align="center">
		<td colspan="3"><input type='radio' checked='checked' name='newSelect' value='1' /> I stick with door number <?php echo "$picked"; ?></td>
	</tr>
	<tr align="center">
		<td colspan="3"><input type='submit' value='Select' /></td>
	</tr>
</form>
</table>

<?php 
/* echo "Juontaja avasi sinulle oven nro $opened ja kysyy: haluatko vaihtaa valintasi vai pysyä siinä?";
echo "<form method='post' action='vaihe2.php'>";
echo "<input type='radio' name='valinta' value='0' /> Vaihdan!<br />";
echo "<input type='radio' checked='checked' name='valinta' value='1' /> Pysyn!<br /><br />";
echo "<input type='submit' value='Päätä' />";
*/



/*
for ($i=0; $i<3; $i ++)
	{	
		switch ($doors[$i])
		{
			case $opened:
				break;
			case $picked:
				break;
			default:
				$switch = $doors[$i];
		}
	}
*/
?>
</body>
</html>