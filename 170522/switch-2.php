<?php
$mm= rand(1,12);
switch($mm) {
    case 1: case 3:case 5:case 7:case 8:case 10:case 12:
        echo $mm . ' contains 31 days';
        break;
    case 2:
        echo $mm . ' contains 28 days';
        break;
    case 4:case 6:case 9:case 11:
        echo $mm . ' contains 30 days';
        break;
    default:
        echo 'Undefined';
}// developer can use boolean, but u will usually use string & number
?>