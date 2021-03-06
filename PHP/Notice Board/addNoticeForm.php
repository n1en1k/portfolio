<?php // addNoticeForm.php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<title>Add Notice</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
</head>
	<body>
		<div class="loginScreen">
			<h2>Notice Board</h2> 
			<h3>Add a Notice</h3> 

			<form name="addNoticeForm" action="addNotice.php" method="post">
			<p><label for="title">Title:</label></p>
			<input type="text" maxlength="80" name="title" id="title" />
			<p><label for="notice">Notice:</label></p>
			<textarea id="notice" name="notice" maxlength="1500">
			</textarea>
			<p><label for="writer">Writer:</label></p>
			<input type="text" name="writer" id="writer" />
			<input class="submitti" type="submit" id="save" value="Save" name="Save" />
			</form>

			<p>Important message! Only Page Admin can delete saved notices.</p>
		</div> <!-- loginScreen -->
	</body>
</html>