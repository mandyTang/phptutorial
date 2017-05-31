<h1>Function fx</h1>
<?php
// 預設值擺後面
    function fx($x){
        $ret = 2 * $x +1;
        return $ret;
    }
    echo $v;

    function greed($who, $pre = 'Hi'){
        echo "{$pre}, {$who}<br>";
    }

//    function greed2(){
//        $names = func_get_args();
//        foreach($names as $name){
//            echo "Hello,{$name}<br>";
//        }
//    }
?>