<?php
// canvas 200px 200px
$imgSrc = imagecreatefromjpeg("./coffee-map.jpg");
$imgDst = imagecreate(200,200);
$black = imagecolorallocate($img,0,0,0);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);

if ($imgSW > $imgSH ){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
    $desX = 0;
    $desY = 100-$imgDH/2;
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
    $desX = 100-$imgDW/2;;
    $desY = 0;
}

imagecopyresized($imgDst,$imgSrc,$desX,$desY,0,0,$imgDW,$imgDH,$imgSW,$imgSH);

header('Content-Type: image/jpeg');
imagejpeg($imgDst);
imagedestroy($imgSrc);
imagedestroy($imgDst);