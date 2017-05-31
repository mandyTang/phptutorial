<?php
// read mode
//    $fp = fopen("./test.txt","r");
//    //var_dump($fp);
//    while ($line = fgets($fp)){
//        $length = strlen($line);
//        echo "{$length} : {$line}<br>";
//    }
//    fclose($fp);

// w: read & write  mode
    $fp = fopen("./test2.txt","w");
    fwrite($fp,"Hello,I am here!");
//    while ($line = fgets($fp)){
//        echo "{$line}<br>";
//    }
    fclose($fp);
// a 加在問見最後一個字元後面
?>
<!--
window output 多兩字元 \r\n;
mac output 多一字元 \n
Assume you do not use fclose,
it means when u use write mode your txt file will be written.
On the other hand, your original file disappeared.
-->
