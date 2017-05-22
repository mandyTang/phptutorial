<?php
$mm= rand(1,12);
switch($mm) {
    case 1:
        echo $mm . ' contains 31 days';
        break;
    case 2:
        echo $mm . ' contains 28 days';
        break;
    case 3:
        echo $mm . ' contains 31 days';
        break;
    case 4:
        echo $mm . ' contains 30 days';
        break;
    case 5:
        echo $mm . ' contains 31 days';
        break;
    case 6:
        echo $mm . ' contains 30 days';
        break;
    case 7:
        echo $mm . ' contains 31 days';
        break;
    case 8:
        echo $mm . ' contains 31 days';
        break;
    case 9:
        echo $mm . ' contains 30 days';
        break;
    case 10:
        echo $mm . ' contains 31 days';
        break;
    case 11:
        echo $mm . ' contains 30 days';
        break;
    case 12:
        echo $mm . ' contains 31 days';
        break;
    default:
        echo 'Undefined';
}
?>