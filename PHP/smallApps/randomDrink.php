<!-- a program to randomly select next three drinks if you have trouble to deside between a beer and a cocktail  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
	<head>
		<meta name="designer" content="Niko Nieminen" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>randomDrink.php</title>
		<style type="text/css">
			style {
				display: none;
			}
			
			body {
				margin: 0;
				padding: 0;
				font-family: georgia, sans-serif;
				background-color: #ffffff;
				color: #000000;
			}
			
			#content {
				width: 896px;
				min-height: 396px;
				border: 2px solid #000000;
				margin: auto;
			}
			
			h2 {
				margin: 0;
				padding: 0;
				margin-top: 20px;
				margin-bottom: 30px;
				font-size: 28px;
				text-align: center;
			}
			
			h3 {
				margin: 0;
				padding: 0;
				padding-left: 35px;
				margin-top: 10px;
				margin-bottom: 10px;
				font-size: 28px;
			}
			
			h4 {
				margin: 0;
				padding: 0;
				padding-left: 35px;
				margin-top: 40px;
				margin-bottom: 10px;
				font-size: 25px;
				color: #ff0000;
				text-decoration: none;
				font-weight: bold;
			}
			
			.link {
				margin: 0;
				padding: 0;
				padding-left: 35px;
				margin-top: 10px;
				margin-bottom: 10px;
				font-size: 20px;
				color: #ff0000;
				text-decoration: none;
				font-weight: bold;
			}
			
			.first {
				margin-top: 50px;
			}
			
			a {
				text-decoration: none;
				font-weight: bold;
				color: #ff0000;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<?php
				// FUNCTION CALL
					runEverything();
			?>
			
		</div> <!-- content -->
	</body>
</html>
<?php
	function runEverything() {
		
		if (!isset($_GET['roll'])) {
	
			// FUNCTION CALL
				firstVisit();
				exit();
		}
		elseif (htmlspecialchars($_GET['roll']) == "code") {
			// FUNCTION CALL
				showCode();
				exit();
		}
		
		elseif (htmlspecialchars($_GET['roll']) !== "ok") {
			// FUNCTION CALL
				firstVisit();
				exit();
		}
				
		else {
			// FUNCTION CALL
				roll();
				exit();
		}
	} // END OF FUNCTION runEverything

	function firstVisit() {
		//ECHO TITLE AND ROLL LINK
			echo "<h2>ROLL NEXT 3 DRINKS BETWEEN A COCKTAIL AND A BEER</h2>";
			echo "<a href='./randomDrink.php?roll=ok'><h4>ROLL</h4></a>";
	} // END OF FUNCTION firstVisit

	function roll() {
		// SETTINGS (leave $x alone, $y is the number of runs)
			$val1 = "COCKTAIL";
			$val2 = "BEER";
			$x = 1;
			$y = 3;
			
		// ECHO TITLE
			echo "<h2>YOU WILL DRINK THESE:</h2>";		
		
		// ROLL 3
			while($x <= $y) {
				randDrink($val1, $val2, $x);
				$x++;
			}
			
		// ECHO LINKS
			echo "<a href='./randomDrink.php'><h5 class='link first'>START</h5></a>";
			echo "<a href='./randomDrink.php?roll=ok'><h5 class='link'>REROLL</h5></a>";
			echo "<a href='./randomDrink.php?roll=code'><h5 class='link'>SHOW CODE</h5></a>";
	} // END OF FUNCTION ROLL

	function randDrink($valueone, $valuetwo, $num){
		$input_array = array("$valueone", "$valuetwo");
		echo "<h3>$num. ";
		echo $input_array[rand(0,sizeof($input_array)-1)];
		echo "</h3>";
	} // END OF FUNTION randDrink
	
	function showCode() {
		// SHOWS CODE
			highlight_file('./randomDrink.php');
		// ECHO LINKS
			echo "<a href='./randomDrink.php'><h5 class='link first'>START</h5></a>";
			echo "<a href='./randomDrink.php?roll=ok'><h5 class='link'>REROLL</h5></a>";
	}
?>