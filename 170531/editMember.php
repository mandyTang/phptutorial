<?php
    session_start();
    if(!isset($_GET['editid']))header("Location: member.php");
    $editid = $_GET['editid'];
    $_SESSION['id'] = $editid;

    $sql = "select * from member where id={$editid}";
    $db = @new mysqli('127.0.0.1',
        'root','root','iii');
    $rs = $db->query($sql);
    $editObj = $rs->fetch_object();

?>
<form action="updateMember.php">

    <!-- 如果已使中session，就不用使用 input hidden-->
    <input type="hidden" name="id"  value="<?php echo $editObj->id; ?>">
    
<table width="100%" border="1">
    <tr>
        <th>Account</th>
        <td><input type='text' name="account"
                   value="<?php echo $editObj->account; ?>"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type='password' name="password"
                   value="<?php echo $editObj->password; ?>"></td>
    </tr>
    <tr>
        <th>Realname</th>
        <td><input type='realname' name="realname"
                   value="<?php echo $editObj->realname; ?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Update"></td>
    </tr>
</table>
</form>