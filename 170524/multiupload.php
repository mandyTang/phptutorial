<?php
$upload = $_FILES['upload'];
//var_dump($upload);
foreach($upload['error']as $index => $error){
    if ($error==0){
        copy($upload['tmp_name'][$index],
            "./upload/{$upload['name'][$index]}");
        echo "OK<br>";
    }else{
        echo "fail<br>";
    }
}
?>
<a type="button" href="opendir.php?dirname=.%2Fupload">Back</a>
<!--var_dump($upload) output;-->
<!--array(5) { -->
<!--["name"]=> array(3) { [0]=> string(36) "屏幕截图 2017-05-20 21.08.14.png" -->
<!--                      [1]=> string(36) "屏幕截图 2017-05-22 02.53.13.png"-->
<!--                      [2]=> string(36) "屏幕截图 2017-05-22 02.56.24.png" } -->
<!--["type"]=> array(3) { [0]=> string(9) "image/png" -->
<!--                      [1]=> string(9) "image/png" -->
<!--                      [2]=> string(9) "image/png" } -->
<!--["tmp_name"]=> array(3) { [0]=> string(36) "/Applications/MAMP/tmp/php/phpKn6J8s" -->
<!--                          [1]=> string(36) "/Applications/MAMP/tmp/php/phpPjCYMH" -->
<!--                          [2]=> string(36) "/Applications/MAMP/tmp/php/phpD6zFuq" } -->
<!--["error"]=> array(3) { [0]=> int(0) -->
<!--                       [1]=> int(0) -->
<!--                       [2]=> int(0) } -->
<!--["size"]=> array(3) { [0]=> int(116969) -->
<!--                      [1]=> int(514669) -->
<!--                      [2]=> int(3135369) } } -->