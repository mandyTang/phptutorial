<?php
    $fp = opendir("˜/test1");//相對目錄 çause ˜
//    $fp = opendir('d:/test1'); - window
//    $fp = opendir("d:\\test1"); - window
    if ($fp){
        echo 'OK';
    }else{
        echo 'Fail';
    }
?>
<!--May use php.net
Directory Function ||
opendir();-->