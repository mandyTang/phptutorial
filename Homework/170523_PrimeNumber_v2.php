<?php
// use function api
    include 'isPrimeApi.php';
    $nums=range(1,1000);
//  foreach($nums as $num){
//        echo $num.'<br>';
//  }
    
    $result = pow($x,$y);
    foreach($nums as $i => $number){
        $table[($i)/10][(int)(($i)%10)]=$number;
//        $x = (int)(($i/10))+1;
//        $y = ($i%10)+1;
//        echo $number.' row = '.$x.' ; col ='.$y.'<br>';
//        echo '<hr>';
    }
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
        <h1>1-100 質數表 - Prime Number</h1>
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