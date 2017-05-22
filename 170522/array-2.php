<?php
//擲100次骰子 1-6出現的機率
    $p = array(0,0,0,0,0,0);

    //$p1 = $p2 = $p3 = $p4 = $p5 = $p6;
    for($i=1; $i<=100; $i++){
        $p[rand(1,6)]++;
        //$r = rand(1,6);
//        switch($r){
//            case 1: $p1++; break;
//            case 2: $p2++; break;
//            case 3: $p3++; break;
//            case 4: $p4++; break;
//            case 5: $p5++; break;
//            case 6: $p6++; break;
//        }
    }
    for ($a=1; $a<= count($p); $a++){
        echo "Point{$a}={$p[$a]}.<br>";
    }

?>