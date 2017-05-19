<!--<h1>巢狀結構 Nests</h1>-->
<h1>閏年計算--Assignment 2/3</h1>
<ul>
    <li>輸入年份</li>
    <li>btn</li>
    <li>今年是否為潤年</li>
</ul>
<p>潤年一年365天 每4年加1天 100年 365天</p>
<?php
    $year = rand(0,100);
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
