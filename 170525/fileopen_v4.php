<?php
    $data = file("test.csv");
?>
<table width="100%" border="1">
    <tr>
        <th>Name</th>
        <th>Phone#</th>
        <th>Country</th>
        <th>City</th>
    </tr>
    <?php
        foreach($data as $line){
            $fileds = explode(',',$line);
            echo '<tr>';
            foreach ($fileds as $filed){
                echo "<td>{$filed}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>
