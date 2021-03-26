<?php
// quiz.php
// a Small Math Quiz

// Variable data
$questionArray = [
    "q1" => "Calculate one plus three",
    "q2" => "Calculate three minus one",
    "q3" => "Calculate three plus two"
];

// Answers (l as letter answer and n as numeric answer)
$answerArray = [
    "la1" => "four",
    "la2" => "two",
    "la3" => "five",
    "na1" => "4",
    "na2" => "2",
    "na3" => "5"
];

// values for while and for loops ($i = 1 loop start, $max = how many times run as how many questions there are, $points = 0 as a default value)
$i = 1;
$max = 3;
$points = 0;

// If user has already answered the questions, show results
if(isset($_POST['submit']) && !empty($_POST['submit'])) {
    // Get answers from sent form
    $userAnswerArray = getData($i, $max);
    // Show results
    showScore($i, $max, $answerArray, $points, $questionArray, $userAnswerArray);
}

// First visit, show questions
else {
    printForm($i, $max, $questionArray);
}

// Functions
function printForm($i, $max, $questionArray) {
    echo "<h2>Math quiz</h2>";
    echo "<form action='quiz.php' method='post'>";
    while ($i <= $max) {
        echo "<p><label for='question$i'>";
        echo $questionArray["q$i"];
        echo "</label></p>";
        echo "<p><input type='text' name='question$i' id='question$i'  /></p>";
        $i++;
    }
    echo "<p><input type='submit' name='submit' id='submit' value='submit' /> <input type='reset' name='reset' id='reset' value='reset' /></p></form>";
}

function showScore($u, $max, $answerArray, $points, $questionArray, $userAnswerArray) {
    while ($u <= $max) {
        // Check for right answer (in letters)
        if(($answerArray["la$u"]) == ($userAnswerArray["ua$u"]))
        {
            $points++;
            echo "<p>$u. question was: <b>";
            echo $questionArray["q$u"];
            echo "</b> - and you answered: <b style='color: green;'>".$userAnswerArray["ua$u"]."</b> - the correct answer is <b style='color: green;'>";
            echo $answerArray["na$u"];
            echo "</b> or <b style='color: green;'>";
            echo $answerArray["la$u"];
            echo "</b></p>";
        }
        // Check for right answer (in numeric)
        elseif(($answerArray["na$u"]) == ($userAnswerArray["ua$u"]))
        {
            $points++;
            echo "<p>$u. question was: <b>";
            echo $questionArray["q$u"];
            echo "</b> - and you answered: <b style='color: green;'>".$userAnswerArray["ua$u"]."</b> - the correct answer is <b style='color: green;'>";
            echo $answerArray["na$u"];
            echo "</b> or <b style='color: green;'>";
            echo $answerArray["la$u"];
            echo "</b></p>";
        }
        // Wrong answer
        else
        {
            echo "<p>$u. question was: <b>";
            echo $questionArray["q$u"];
            echo "</b> - and you answered: <b style='color: red;'>".$userAnswerArray["ua$u"]."</b> - the correct answer is <b style='color: red;'>";
            echo $answerArray["na$u"];
            echo "</b> or <b style='color: red;'>";
            echo $answerArray["la$u"];
            echo "</b></p>";
        }
        $u++;
    } 
    echo "<h2>You got $points / $max points!</h2>";
    echo "<h2><a style='text-decoration: none; color: blue;' href='quiz.php'>Do It Again</a></h2>";
}

function getData($i, $max) {
                // Get data from sent form
                for($p = $i; $p <= $max; $p++) {
                    ${"userAnswer$p"} = strtolower(trim(htmlspecialchars($_POST["question$p"])));
                    $userAnswerArray["ua$p"] = ${"userAnswer$p"};
                }
                return $userAnswerArray;
}
?>