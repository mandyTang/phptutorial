<?php
// 文字陣列顯示方式
//    $data = file("./test2.txt");
//    foreach($data as $line){
//        echo "==> {$line}<br>";
//    }
// 文字字串顯示
    $data = file_get_contents("./test2.txt");
    echo $data;
?>