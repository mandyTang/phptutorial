<?php
include 'sql.php';
    session_start();
    if(!isset($_SESSION['id'])) header ("Location: member.php");
    $id = $_SESSION['id'];
    $account = $_GET['account'];
    $password = $_GET['password'];
    $realname = $_GET['realname'];
    $pdo = new pdo($dsn, $user, $password, $opt);
    $sql = "update member set account=?, password=?, realname=? where id=?";
    $pdo->prepare($sql)->execute([$account, $password, $realname, $id]);
    header("Location: member.php");
?>