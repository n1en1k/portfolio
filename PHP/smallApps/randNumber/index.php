<!-- random number generator for slam csgo in-game music -->
<!-- we have always problems to decide which song to listen next, so this helps us -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<title>randNumber</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
	<link rel="shortcut icon" href="../../images/favicon.png" type="image/png" />
</head>
<body>
	<div class="container">
		<?php
		// random number generator for slam csgo in-game music
		// we have always problems to decide which song to listen next, so this helps us
		echo "<h2 class='contactTitle'>Song Number: <b>" . (rand(1, 183) . "</b></h2>\n\n");
		?>
		<h2 class="contactH2"><a class="contactA" href="javascript:window.location.reload(true)">Reload</a></h2>
	</div> <!-- container -->
</body>
</html>