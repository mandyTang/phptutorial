<?php
    session_start();
    if(!isset($_SESSION['id'])) header ("Location: member.php");
    $id = $_SESSION['id'];
    $account = $_GET['account'];
    $password = $_GET['password'];
    $realname = $_GET['realname'];
    $sql = "update member set account='{$account}', password='{$password}', realname='{$realname}' where id={$id}";
    $db = @new mysqli('127.0.0.1',
        'root','root','iii');
    $db->query($sql);
    header("Location: member.php");
?>