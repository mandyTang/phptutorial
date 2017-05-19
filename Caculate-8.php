<h1>萬年計算--Assignment 3/3</h1>
<ul>
    <li>輸入年份</li>
    <li>btn</li>
    <li>今年是否為潤年</li>
</ul>
<p>1752 9月2號隔天14號</p>
<p>Hint:</p>
<ul>
    <li>9/2前一個計算</li>
    <li>9/14另一種計算</li>
</ul>
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
