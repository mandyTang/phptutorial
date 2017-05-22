<?php
    $a = array(1,2,3);
    $b[] = $a;// $b[0] ==> array(1,2,3);
    $b[] = array(2,4,5,7);
    $b[] = array(2,7,5,7);
    echo count($b[0]).'<hr>';////代表第三行
    echo count($b[1]).'<hr>';//代表第四行的
    echo count($b).'<hr>';//第三行到第五行
    //永遠只看ㄧ維 因為php是線型運算的
?>