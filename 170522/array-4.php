<h1>Poker</h1>
<ul>
    <li>0-51</li>
    <li>比對之前得到的亂數</li>
</ul>
<hr>
<?php
    $poker = array();
    for ($i=0; $i<52; $i++){
        $temp = rand(0,51);

        //檢查機制
        $isRepeat = false;
        for($j=0; $j<$i; $j++){
            if($poker[$j]==$temp){
                //重複了
                $isRepeat = true;
                break;
            }
        }
        if($isRepeat){
            $i--;
            continue;
        }else{
            $poker[] = $temp;
        }
        echo $poker[$i].'<br>';
    }
?>