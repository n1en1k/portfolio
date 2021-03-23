<!-- f to c & c to f degrees -->
<html>
<head>
<script type="text/javascript">
function reset() {
  document.getElementById("temp").reset();
}

function showF() {
  var x = document.getElementById("farru");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 

function showC() {
  var x = document.getElementById("cellu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>
<style type="text/css">
p {
	font-size: 25px;
	margin: 5px;
}

body {
	margin: 0;
	padding: 0;
	background-color: #aeaeae;
}

#keskus {
	width: 400px;
	height: 400px;
	margin: auto;
	padding: 25px;
	border-radius: 10px;
	background-color: #fff;
	text-align: center;
}

#fahren {
	width: 60px;
	height: 40px;
	border: 1px solid #000;
	font-size: 24px;
}

#celcius {
	width: 60px;
	height: 40px;
	border: 1px solid #000;
	font-size: 24px;
}

.painike {
	background-color: #333;
	border: 1px solid #000;
	width: 150px;
	height: 45px;
	padding: 10px;
	margin-left: 5px;
	color: #fff;
	font-size: 20px;
	cursor: pointer;
}

</style>
</head>
<body>
<div id="keskus">
<?php
if (!isset($_POST['calc'])) {
	
			// FUNCTION CALL
				printForm();
				exit();
		}
		elseif ($_POST['laji'] == "0") {
			// FUNCTION CALL
				$fah = htmlspecialchars($_POST['fahren']);
				$fah = trim($fah);
				fahrenheitToCelsius($fah);
				exit();
	}
		
		elseif ($_POST['laji'] == "1") {
			// FUNCTION CALL
			$cel = htmlspecialchars($_POST['celcius']);
			$cel = trim($cel);
			celciusToFahrenheit($cel);
				exit();
	}
?>
</div>
</body>
</html>


<?php



//fahrenheitToCelsius($fah);

//celciusToFahrenheit($cel);


function printForm() {
	echo "<form action='#' name='temp' method='post'>
	<p><input onclick='showF()' type='radio' name='laji' value='0' /> F to C</p><br />
	<p><input onclick='showC()' type='radio' name='laji' value='1' /> C to F</p><br />
	
	<p style='display: none;' id='farru'>Fahrenheit:<br /><input type='text' name='fahren' id='fahren' maxlength='8' /></p><br />
	<p style='display: none;' id='cellu'>Celcius:<br /><input type='text' name='celcius' id='celcius' maxlength='8' /></p><br />
	
	<input class='painike' type='submit' name='calc' value='calculate' />
	<input class='painike' type='button' onclick='reset()' value='Reset form'>
	</form>";
}



function fahrenheitToCelsius($f) {
// °C = (°F − 32) / 1,8
if ($f == "") {
	$f = 0;
echo "<p>Enter value!</p><p><a href='./ftoc.php'>Start</a></p>";
}
else {
$fa = $f - 32;
$con = $fa / 1.8;
$con = round($con,2);
 echo "<p>$f &deg;F = $con &deg;C</p><p><a href='./ftoc.php'>Start</a></p>";}
}


function celciusToFahrenheit($c) {
// °F = (°C) · 1,8 + 32
if ($c == "") {
echo "<p>Enter value!</p><p><a href='./ftoc.php'>Start</a></p>";
}
else {
$con = $c * 1.8;
$con = $con + 32;
$con = round($con,2);
echo "<p>$c &deg;C = $con &deg;F</p><p><a href='./ftoc.php'>Start</a></p>";}
}
?>