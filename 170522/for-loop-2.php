由4開始 7欄 5列
<table width="100%" border="1">
        <?php
            $start = 2;
            $col = 4;
            $line =2;
            for ($row = 0; $row<$line; $row++) {
                echo '<tr>';
                for ($j = $start; $j < $start+$col; $j++) {
                    $newj = $j + $row*$col;
                    echo (($j+$row)%2==0)?'<td bgcolor=\'#eee\'>':'<td bgcolor=\'#f0f8ff\'>';
                    //Step 02
//                    if(($j+$row)%2==0){
//                        echo '<td bgcolor=\'#eee\'>';
//                    }else{
//                        echo '<td bgcolor=\'#f0f8ff\'>';
//                    }
                    //Step 01
//                    if ($j%2==0){
//                        if ($row%2==0){
//                            echo '<td bgcolor=\'#f0f8ff\'>';
//                        }else {
//                            echo '<td bgcolor=\'#eee\'>';
//                        }
//                    }else{
//                        if ($row%2==0){
//                            echo '<td bgcolor=\'#eee\'>';
//                        }else {
//                            echo '<td bgcolor=\'#f0f8ff\'>';
//                        }
//                    }

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