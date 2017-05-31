<?php
$db = @new mysqli(
    '127.0.0.1',
    'root','root', 'iii');
if  (isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql = "delete from member where id={$delid}";
    $db->query($sql);
}

$sql = 'select * from member';
$rs = $db->query($sql);
var_dump($rs);
?>
<a href="addMember.php">New</a>
<hr>
<table width="100%" border="1">
    <tr>
        <th>ID</th>
        <th>Account</th>
        <th>Password</th>
        <th>Real Name</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
        while($row = $rs->fetch_object()){
            echo '<tr>';
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->account}</td>";
            echo "<td>{$row->password}</td>";
            echo "<td>{$row->realname}</td>";
            echo "<td><a href='?delid={$row->id}'>Delete</a></td>";
            echo "<td><a href='editMember.php?editid={$row->id}'>Edit</a></td>";
            echo '</tr>';
        }
    ?>
</table>