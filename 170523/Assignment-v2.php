<h1>Poker</h1>
<?php
    $poker=range(0,51);
    shuffle($poker);
//    foreach ($poker as $card){
//        echo $card.'<br>';
//    }
    echo '<hr>';
    foreach($poker as $i => $value){
        $player[$i%4][(int)($i/4)] = $value;
    }
?>
<table width="100%" border="1">
        <?php
            $suit = array("<font color='black' size='3'>&spades;</font>",
                "<font color='red' size='3'>&hearts;</font>",
                "<font color='red' size='3'>&diams;</font>",
                "<font color='black' size='3'>&clubs;</font>");
            $value = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
            foreach ($player as $sb){
                echo '<tr>';
                sort($sb);
                foreach ($sb as $card) {
                    echo "<td>{$suit[(int)($card/13)]}{$value[$card%13]}</td>";
                }
                echo '</tr>';
            }

        ?>
</table>