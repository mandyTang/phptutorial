<?php
$i=0;
for(test1(); ; test2()){
    echo $i++."<br>";
    if ($i<15) break;
    // break 會停止
    // 無break 會重複動作 無窮大
}
function test1(){
    echo 'Bard<br>';
}
function test2(){
    echo '---------<br>';
}
//$i=0;
//for(; $i<=10;){
//echo $i++."<br>";
//}
// 和下列相等
//for($=i; $i<=10;$i++){
//echo $i."<br>";
//}
?>

