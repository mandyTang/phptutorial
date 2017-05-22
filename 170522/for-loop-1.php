<table width="100%" border="1">
        <?php
            for ($row = 0; $row<2; $row++) {
                echo '<tr>';
                for ($j = 2; $j <= 5; $j++) {
                    $newj = $j + $row*4;
                    echo '<td>';
                    for ($i = 1; $i <= 9; $i++) {
                        $r = $newj * $i;
                        echo "{$newj} x {$i} = {$r}<br>";
                    }
                    echo '</td>';
                }
                echo '</tr>';
            }
        ?>
</table>
<pre>
    //Step 01
    for ($i=1; $i<=9; $i++){
        echo "2 x 1 = 2<br>";
    }
    //Step 02
    for ($i=1; $i<=9; $i++){
        echo "2 x {$i} = 2<br>";
    }
    // Step 03
    for ($i=1; $i<=9; $i++) {
        $r = 2 * $i;
        echo "2 x {$i} = {$r}<br>";
    }
    //Step 04 td repeated four times
    echo '<td>';
    for ($i=1; $i<=9; $i++) {
        $r = 2 * $i;
        echo "2 x {$i} = {$r}<br>";
    }
    echo '</td>';

    //Step 05 made of for loop
    for ($j=2; $j<=5; $j++){
        echo '<td>';
        for ($i=1; $i<=9; $i++) {
            $r = 2 * $i;
            echo "2 x {$i} = {$r}<br>";
        }
        echo '</td>';
    }

    //Step 06
    for ($j=2; $j<=5; $j++){
        echo '<td>';
        for ($i=1; $i<=9; $i++) {
            $r = $j * $i;
            echo "{$j} x {$i} = {$r}<br>";
        }
        echo '</td>
    }
    //Step 07 tr 2 times
    echo '<tr>';
    for ($j=2; $j<=5; $j++){
        echo '<td>';
        for ($i=1; $i<=9; $i++) {
            $r = $j * $i;
            echo "{$j} x {$i} = {$r}<br>";
        }
        echo '</td>
    }
        echo </tr>;

    //Step 08
    for ($row=0; $row <=2; $row++){
         echo '<tr>';
        for ($j=2; $j<=5; $j++){
            echo '<td>';
            for ($i=1; $i<=9; $i++) {
                $r = $j * $i;
                echo "{$j} x {$i} = {$r}<br>";
            }
            echo '</td>
        }
            echo </tr>;
    }
    //Step 09 run to second row add 4
    for ($row=0; $row <=2; $row++){
         echo '<tr>';
        for ($j=2; $j<=5; $j++){
            $newj = $j + $row*4(兩列一列四欄);
            echo '<td>';
            for ($i=1; $i<=9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br>";
            }
            echo '</td>
        }
            echo </tr>;
    }

</pre>