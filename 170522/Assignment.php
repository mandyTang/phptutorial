<h1>Poker</h1>
<ul>
    <li>骰子</li>
    <li></li>
</ul>
<hr>
<?php
    $dice = array();
    for ($i=0; $i<6; $i++){
    //檢查機制
        do{
            $temp = rand(0,5);
            $repeat = false;
            for($j=0; $j<$i; $j++){
                if($dice[$j]==$temp){
                    $repeat = true;
                    break;
                }
            }
        } while ($repeat);
    $dice[] = $temp;

    echo $dice[$i].'<br>';
}
?>
