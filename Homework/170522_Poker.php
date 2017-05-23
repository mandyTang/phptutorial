<h1>Poker</h1>
<ul>
    <li>骰子</li>
</ul>
<hr>
<?php
    $dice = array(1,2,3,4,5,6);
    for ($i=0;$i<6;$i++){
        shuffle($dice);
        echo 'Choose ' . $dice[0].'<br>';
        echo $dice[1].$dice[2].$dice[3].$dice[4].$dice[5].'<br>';
        echo '<hr>';
        break;
    }
    shuffle($dice);
    echo 'Choose ' . $dice[0].'<br>';
    echo $dice[1].$dice[2].$dice[3].$dice[4].$dice[5].'<br>';
    echo '<hr>';

    $dice2 = array($dice[1],$dice[2],$dice[3],$dice[4],$dice[5]);
    shuffle($dice2);
    echo 'Choose ' . $dice2[0].'<br>';
    echo $dice2[1].$dice2[2].$dice2[3].$dice2[4].'<br>';
    echo '<hr>';

    $dice3 = array($dice2[1],$dice2[2],$dice2[3],$dice[4]);
    shuffle($dice3);
    echo 'Choose ' . $dice3[0].'<br>';
    echo $dice3[1].$dice3[2].$dice3[3].'<br>';
    echo '<hr>';

    $dice4 = array($dice3[1],$dice3[2],$dice3[3]);
    shuffle($dice4);
    echo 'Choose ' . $dice4[0].'<br>';
    echo $dice4[1].$dice4[2].'<br>';
    echo '<hr>';

    $dice5 = array($dice4[1],$dice4[2]);
    shuffle($dice5);
    echo 'Choose ' . $dice5[0].'<br>';
    echo $dice5[1].'<br>';
    echo '<hr>';

?>
