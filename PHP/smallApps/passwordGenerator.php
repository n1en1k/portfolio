<?php

// check if the button has been pressed
if(!isset($_POST['generatePassword'])) {
    $generatedPassword = "";
}
else {
    // password characters
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "()[]{},;:.-_/\\?+*#";

    // combine characters
    $passwdString = $upperCase . $lowerCase . $numbers . $symbols;

    // randomize 12 characters
    $generatedPassword = substr(str_shuffle($passwdString),0,12);
}

?>

<html>
<head>
    <title>Password Generator</title>
</head>
<body>
    <div id="container" class="container">
        <form id="passwordGeneratorForm" name="passwordGeneratorForm" action="./passwordGenerator.php" method="POST">
            <input type="submit" name="generatePassword" id="generatePassword" value="Generate Password" />
        </form>
        <?php
            echo "
                <h2 class='passwd'>
                $generatedPassword
                </h2>
            "; 
        ?>
    </div> <!-- end of container -->
</body>
</html>