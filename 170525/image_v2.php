<?php
$img = imagecreatefromjpeg("./pokemon.JPG");
$black = imagecolorallocate($img,0,0,0);
$font = './Aller/Aller_Rg.ttf';
imagettftext($img,24,0,20,100,$black,$font,"@Mandy");

header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);