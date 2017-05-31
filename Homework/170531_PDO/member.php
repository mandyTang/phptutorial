<?php
include 'sql.php';
$pdo = new pdo($dsn, $user, $password, $opt);
if  (isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql = "delete from member where id=?";
    $pdo->prepare($sql)->execute([$delid]);
}
$sql = 'select * from member';
$sth = $pdo->prepare($sql);
$sth->execute();
$rs = $sth->fetchAll();
$row = array_shift($rs);
//var_dump($row);

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
    while($row = array_shift($rs)){
        $id = $row[0];
        $account = $row[1];
        $password = $row[2];
        $realname = $row[3];
        echo '<tr>';
        echo "<td>{$id}</td>";
        echo "<td>{$account}</td>";
        echo "<td>{$password}</td>";
        echo "<td>{$realname}</td>";
        echo "<td><a href='?delid={$id}'>Delete</a></td>";
        echo "<td><a href='editMember.php?editid={$id}'>Edit</a></td>";
        echo '</tr>';
    }
    ?>
</table>