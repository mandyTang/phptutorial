<?php
//陣列是一種資料型態
    echo 'Type 01<br>';
    $a[0]=12;
    echo gettype($a)."<br>";
    var_dump($a);
    echo count($a);
    echo '<hr>';
    echo 'Type 02<br>';
    $b[]=123;
    $b[]=12.3;
    $b[]=true;
    var_dump($b);
    echo count($b);
    echo '<hr>';
    echo 'Type 03<br>';
    $Nick['age'] = 51;
    $Nick['weight'] = 80;
    $Nick['name'] = 'Nick';
    $Nick['gender'] = true;
    var_dump($Nick);
    echo count($Nick);
    echo '<hr>';
    echo 'Type 04<br>';
    $c=array(1,2,3,true);
    var_dump($c);
    echo count($c);

    echo '<hr>';
    echo 'Type 04<br>';
    $c=array(1,2,3 => 'Apple',true);
    var_dump($c);
    echo count($c);
?>