<?php
$a= '10';
switch($a) {
    case 1:
        echo 'A';
        break;
    case 10:
        echo 'B1';
        break;
    case '10':
        echo 'B2';
        break;
    default:
        echo 'D';
}
// $a = '10'; == $a=10;
// 會先比對第一個條件
// default 置中 不需要加break 因為加了並沒意義
// example: A ==>A事件; B==>Ｂ事件; 其他事件 ＝＝>其它加Ｂ的事件;
//case 1:
//  echo 'A';
//  break;
// default:
//  echo: 'B';
// case B:
//  echo: 'B1';
//  break;
?>