<?php
// quiz.php
// a Small Math Quiz

// Variable data
$questionArray = [
    "q1" => "Calculate one plus three",
    "q2" => "Calculate three minus one",
    "q3" => "Calculate three plus two"
];

$answerArray = [
    "a1" => "four",
    "a2" => "two",
    "a3" => "five",
    "a11" => "4",
    "a22" => "2",
    "a33" => "5"
];

$i = 1;
$max = 3;
$points = 0;

// If user has already answered the questions, show results
if(isset($_GET['submit']) && !empty($_GET['submit'])) {
    showScore($i, $max, $answerArray, $points, $questionArray);
}

// First visit, show questions
else {
    printForm($i, $max, $questionArray);
}

// Functions
function printForm($i, $max, $questionArray) {
    echo "<h2>Please use letters only, e.g. one</h3>";
    echo "<form action='quiz.php' method='get'>";
    while ($i <= $max) {
        echo "<p><label for='question$i'>";
        echo $questionArray["q$i"];
        echo "</label></p>";
        echo "<p><input type='text' name='question$i' id='question$i'  /></p>";
        $i++;
    }
    echo "<p><input type='submit' name='submit' id='submit' value='submit' /> <input type='reset' name='reset' id='reset' value='reset' /></p></form>";
}

function showScore($u, $max, $answerArray, $points, $questionArray) {
    while ($u <= $max) {
        if(($answerArray["a$u"]) == ($_GET["question$u"]))
        {
            $points++;
            echo "<p>$u. question was: <b>";
            echo $questionArray["q$u"];
            echo "</b> - and you answered: <b style='color: green;'>".$_GET["question$u"]."</b> - the correct answer is <b style='color: green;'>";
            echo $answerArray["a$u"];
            echo "</b> or <b style='color: green;'>";
            echo $answerArray["a$u$u"];
            echo "</b></p>";
        }
        elseif(($answerArray["a$u$u"]) == ($_GET["question$u"]))
        {
            $points++;
            echo "<p>$u. question was: <b>";
            echo $questionArray["q$u"];
            echo "</b> - and you answered: <b style='color: green;'>".$_GET["question$u"]."</b> - the correct answer is <b style='color: green;'>";
            echo $answerArray["a$u"];
            echo "</b> or <b style='color: green;'>";
            echo $answerArray["a$u$u"];
            echo "</b></p>";
        }
        else
        {
            echo "<p>$u. question was: <b>";
            echo $questionArray["q$u"];
            echo "</b> - and you answered: <b style='color: red;'>".$_GET["question$u"]."</b> - the correct answer is <b style='color: red;'>";
            echo $answerArray["a$u"];
            echo "</b> or <b style='color: red;'>";
            echo $answerArray["a$u$u"];
            echo "</b></p>";
        }
        $u++;
    } 
    echo "You got $points / $max points!";
}
?>