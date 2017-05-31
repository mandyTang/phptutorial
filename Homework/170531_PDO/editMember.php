<?php
include 'sql.php';

    session_start();
    if(!isset($_GET['editid']))header("Location: member.php");
    $editid = $_GET['editid'];
    $_SESSION['id'] = $editid;
    $pdo = new pdo($dsn, $user, $password, $opt);
    $sql = "select * from member where id=?";
    $editsth = $pdo->prepare($sql)
    $editsth->execute([$editid]);
    $editrs = $editsth->fetchAll();
    $row = array_shift($editrs);
    $id = $row[0];
    $account = $row[1];
    $password = $row[2];
    $realname = $row[3];

?>
<form action="updateMember.php">

    <!-- 如果已使中session，就不用使用 input hidden-->
    <input type="hidden" name="id"  value="<?php echo $id; ?>">
    
<table width="100%" border="1">
    <tr>
        <th>Account</th>
        <td><input type='text' name="account"
                   value="<?php echo $account ?>"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type='password' name="password"
                   value="<?php echo $password ?>"></td>
    </tr>
    <tr>
        <th>Realname</th>
        <td><input type='realname' name="realname"
                   value="<?php echo $realname ?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Update"></td>
    </tr>
</table>
</form>