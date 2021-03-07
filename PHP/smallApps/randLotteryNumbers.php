<?php
// Gives 7 random numbers

    $count = 7;
    $highball = 40;
    $numbers = range(0, $highball);
    shuffle($numbers);
    $drawn = array_slice($numbers, - $count);
    sort($drawn);

    echo implode(" - ", $drawn);
?>