<?php
    $max = $_GET["maxRange"];
    if(empty($max)){
        $max = 100;
    }
    $nums=range(1,$max);
    foreach($nums as $i => $number){
        $table[($i)/10][(int)(($i)%10)]=$number;
    }
    function isPrime($number){
        $n = abs($number);
        $j =2;
        while($j <= sqrt($n)){
            if ($n % $j == 0) {
                return false;
            }
            $j++;
        }
        return true;
    };

?>
<style type="text/css">
    body{
        background-color:#081918;
        color:rgba(255,255,255,0.98);
    }
    table{
        width:85%;
        margin:auto;
        text-align: center;
        font-size:1.75em;
        border:2px solid white;
        border-radius: 5px;
    }
    p{
        color:rgba(255,255,255,0.8);
    }
    p span{
        color:#3dbfb7;
        /*font-size:2.5em;*/
    }
    input{
        font-size: 20px;
        text-align: center;
        width: 250px;
        border-radius: 10px;
    }
    tr{
        /*border-bottom:1px dotted #d4d4d4;*/
    }
    tr:last-child{
        border-bottom:none;
    }
    td{
        height:70px;
        /*border:1px solid white;*/
    }
    .n2,.n3,.n5,.n7{
        background-color:#173332;
        color:transparent;
        text-shadow: 0 0 2px rgba(255,255,255,0.15);
    }
    .prime{
        background-color:#3dbfb7;
        color:white;
        font-weight:bold;
    }
</style>
<table>
    <caption>
        <h1>1-1000 質數表 - Prime Number</h1>
        <form>
            <label>Type a max range!</label>
            <input name="maxRange" value="" type="text">
        </form>

        <p><span>&lhblk;</span> 質數上色</p>

    </caption>
    <?php
    foreach($table as $row){
        echo '<tr>';
        foreach($row as $number){
            if(isPrime($number)==1 && $number!=1){
                echo '<td class="prime">'.$number.'</td>';
            }else{
                echo '<td class="n2">'.$number.'</td>';
            }
        }
        echo '</tr>';
    }
    ?>
</table>