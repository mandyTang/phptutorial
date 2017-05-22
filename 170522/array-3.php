<?php
//擲100次骰子 1-6出現的機率
    $p = array(0,0,0,0,0,0);
    for($i=1; $i<=5000; $i++){
        $temp = rand(1,9);
        $p[$temp>=7?$temp-3:$temp]++;
    }
    for ($a=1; $a< count($p); $a++){
        echo "Point{$a}={$p[$a]}.<br>";
    }

?>