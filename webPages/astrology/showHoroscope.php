<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
	<head>
		<meta name="description" content="Astrology" />
		<meta name="keywords" content="Astrology" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 Days" />
		<meta name="designer" content="n1en1k" />
		<link rel="shortcut icon" href="./img/favicon.png" type="image/png" />
		<title>Astrology</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
		<link href="./css/styles.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet" />
		<script type="text/javascript" src="./js/validate.js"></script>
		<script type="text/javascript" src="./js/js.js"></script>
	</head>
	<body>
		<div id="nav">
			<div class="burger-icon"><i class="fas fa-bars"></i> Menu</div>
			<ul class="nav-items main-nav mobile-hide">
				<li><a href="#"><img src="./img/favicon.png" alt="a" /></a></li>
				<li><a href="#">astrology</a></li>
				<li><a href="#">horoscopes</a></li>
				<li><a href="#">blog</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</div> <!-- end of nav -->
		<div id="container">
			<div id="main-title">
				<h1>Astrology as a guide for us</h1>
				<p>We often wonder how to live and what to do. The stars will tell us the answers!</p>
			</div> <!-- main-title -->
			<!-- <div id="horoscopes">
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Aries">Aries</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Taurus">Taurus</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Gemini">Gemini</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Cancer">Cancer</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Leo">Leo</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Virgo">Virgo</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Libra">Libra</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Scorpio">Scorpio</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Sagittarius">Sagittarius</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Capricorn">Capricorn</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Aquarius">Aquarius</a></div>
				<div class="horoscopes"><a href="./showHoroscope.php?horoscopeName=Pisces">Pisces</a></div>

			</div> --> <!-- end of horoscopes -->
			<div id="wrap">
				<div id="main-content">
					<h2>Selected Horoscope details</h2>
					<?php
					// Check for variable
					 if(!isset($_GET['horoscopeName']))
						{
							header('location: ./index.html');
							exit();
						}

						$selectedHoroscope = $_GET['horoscopeName'];
						
						// Add sql query
						// where horoscopeName = '$selectedHoroscope';
						// if rows 0 header index.html
						// else echo horoscope details
					?>
				</div> <!-- end of main-content -->
				<div id="main-sidebar">
					<h2>Weekly Email Update</h2>
					<p>Subscribe below and we'll send you a weekly email summary of our latest news!</p>
					<form onsubmit="return validateForm()" name="subscribe" id="subscribe" action="#" accept-charset="UTF-8" method="post">
					<p><input placeholder="Email Address" class="email" type="email" id="email" name="email" maxlength="150"/></p>
						
					<input type="radio" id="action_sub" name="action" value="sub" checked />
					<label for="action_sub">subscribe</label><br/>
					<input type="radio" id="action_unsub" name="action" value="unsub" />
					<label for="action_unsub">unsubscribe</label>
					<br />
					<p><button type="submit" name="submit" class="subscribe" value="submit">Submit</button></p>
					</form>
				</div> <!-- end of main-sidebar -->
			</div> <!-- end of wrap -->
			<div id="footer">
				<p><img src="./img/favicon.png" alt="a" /> &copy; 2021</p>
			</div> <!-- end of footer -->
		</div> <!-- end of container -->
	</body>
</html>