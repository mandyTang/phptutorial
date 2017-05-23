<?php
include 'lotteryapi.php';
$myLottery = createLottery();
foreach($myLottery as $lottery){
    echo "{$lottery}<br>";
}