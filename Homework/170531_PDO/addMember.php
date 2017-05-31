<?php
include 'sql.php';
    if(isset($_GET['account'])){
        $account = $_GET['account'];
        $password = $_GET['password'];
        $realname = $_GET['realname'];
        $pdo = new pdo($dsn, $user, $password, $opt);
        $sql = "insert into member (account, password, realname)" . "values (?,?,?)";
        $pdo->prepare($sql)->execute([$account, $password, $realname]);
        header('Location:member.php');

    }
?>
<form style="width:400; margin:auto;">
<table width="100%" border="1">
    <tr>
        <th>Account</th>
        <td><input type='text' name="account" value=""></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type='password' name="password" value=""></td>
    </tr>
    <tr>
        <th>Realname</th>
        <td><input type='realname' name="realname" value=""></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Create"></td>
    </tr>
</table>
</form>