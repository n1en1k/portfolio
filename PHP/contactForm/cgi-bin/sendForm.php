<?php
// Check for form use
 if(!isset($_POST['submit']))
	{
		header('location: ../contactForm.html');
		exit();
	}

// Get data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$secure = $_POST['secure'];

// Clear tags 
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$secure = htmlspecialchars($secure);

// Trim
$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$message = trim($message);
$secure = trim($secure);

// Check the secure question
// Secure question to get rid of bots
if($secure !== "4") {
	header('location: ../contactForm.html');
	exit();
}

// Check for empty values
else if($name == "") {
	header('location: ../contactForm.html');
	exit();
}

else if($phone == "") {
	header('location: ../contactForm.html');
	exit();
}

else if($email == "") {
	header('location: ../contactForm.html');
	exit();
}

else if($viesti == "") {
	header('location: ../contactForm.html');
	exit();
}

else if($name == "name:") {
	header('location: ../contactForm.html');
	exit();
}

else if($phone == "phone:") {
	header('location: ../contactForm.html');
	exit();
}

else if($email == "email:") {
	header('location: ../contactForm.html');
	exit();
}

else if($message == "message:") {
	header('location: ../contactForm.html');
	exit();
}

// Receiving address 
$to = 'lorem.ipsum@dotsi.amet';


// Subject
$subject = "A Message from our website";



$message = "
Name: ".$name."\n
Phone: ".$phone."\n
Email: ".$email." \n\n
Message: \n\n ".$message."";

 // Send
 mail($to, $subject, $message);

// Return user to a thanks page
header('location: ../thankYou.html');

?>
