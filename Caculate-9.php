<?php
    $a = rand(0,100);
    echo $score . "<br>";
    if ($score >= 90) {
        echo "You get A.";
    } else if ($score >= 80) {
        echo "You get B.";
    } else if ($score >= 70) {
        echo "You get C.";
    } else if ($score >= 60) {
        echo "You get D.";
    } else {
        echo "You get E.";
    }
?>
