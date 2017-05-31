<?php
if(!isset($_GET['rate'])) exit(0);
$rate = $_GET['rate'];
    $img = imagecreate ( 400 , 40 );
    $background_color = imagecolorallocate($img, 255, 255, 255);
    $red = imagecolorallocate($img, 255, 0, 0);
    $yellow = imagecolorallocate($img, 255, 255, 0);
    imagefilledrectangle($img, 0,0, 400, 40, $yellow);
    imagefilledrectangle($img, 0,0, (int)($rate*400/100), 40, $red);
    //$text_color =  imagecolorallocate($img, 0, 255, 0);
    //imagestring($img, 20, 200, 300,  "50%", $text_color);
    header('Content-Type: image/jpeg');
    imagejpeg($img);
    imagedestroy($img);
?>
<!--<h1>GD</h1>-->
<!--<ol>-->
<!--    <li>畫布</li>-->
<!--    <li>處理Draw</li>-->
<!--    <li>輸出-->
<!--        <ul>-->
<!--            <li>Browser</li>-->
<!--            <li>File</li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li>清除</li>-->
<!--</ol>-->
<!--<p>resource imagecreate ( int $width , int $height );-->
<!--resource means computer memory</p>-->
