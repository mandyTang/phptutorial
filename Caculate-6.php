<!--<h1>巢狀結構 Nests</h1>-->
<h1>過濾式結構 Filter</h1>
<p>人工智慧,防火牆,封包用相同的原理</p>
<?php
$score = rand(0,100);
echo $score . "<br>";
//if ($score >=90){
//    echo "You get A.";
//}else{
//    if ($score >= 80){
//        echo "You get B.";
//    }else{
//        if ($score >= 70){
//            echo "You get C.";
//        }else{
//            if ($score >= 60){
//                echo "You get D.";
//            }else{
//                echo "You get E.";
//            }
//        }
//    }
//}
    if ($score >= 90) {
        echo "You get A.";
    } else if ($score >= 80) {
        echo "You get B.";
    } else if ($score >= 70) {
        echo "You get C.";
    } else if ($score >= 60) {
        echo "You get D.";
    } else {
        echo "You get E.";
    }
?>
