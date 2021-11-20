<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
<title>Gameshow - Monty Hall problem - stageTwo</title>
</head>
<body>
<?php
$doors = array(1,2,3);
$newSelect = $_POST['newSelect'];

$picked = $_POST['selectedDoor'];

$prize = $_POST['winningDoor'];

$opened = $_POST['openedDoor'];


echo "<table><tr>";

if($prize == 2) {
echo "<td><img src='./images/goat.png' alt='goat' /></td>
<td><img src='./images/prize.png' alt='prize' /></td>
<td><img src='./images/goat.png' alt='goat' /></td>";
}

elseif($prize == 3) {
echo "<td><img src='./images/goat.png' alt='goat' /></td>
<td><img src='./images/goat.png' alt='goat' /></td>
<td><img src='./images/prize.png' alt='prize' /></td>";
}

elseif($prize == 1) {
echo "<td><img src='./images/prize.png' alt='prize' /></td>
<td><img src='./images/goat.png' alt='goat' /></td>
<td><img src='./images/goat.png' alt='goat' /></td>";
}

echo "</tr><tr><td align='center' colspan='3'>";

if($newSelect == 0) {
for ($i=0; $i<3; $i ++)
	{	
		switch ($doors[$i])
		{
			case "$opened":
				break;
			case "$picked":
				break;
			default:
				$switched = $doors[$i];
		}
	}
	
	
	if($switched == $prize) {
	echo "GZ! YOU WON BUY SWITCHING!";
	
}

else {
	echo "Sorry, you lost while switching.";
	
	
	
	}
}


elseif($newSelect == 1) {
	if($picked == $prize) {
		echo "GZ! YOU WON BUY STICKING!";
	}
	
	else {
	echo "Sorry, you lost while sticking.";
}
}


echo "</td></tr></table>";
?>
</body>
</html>