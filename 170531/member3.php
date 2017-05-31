<?php
include 'sql.php';

$pdo = new pdo($dsn, $user, $password, $opt);

$account="Katty';delete from member";
$password="33445";
$realname="Katty Mohamon";
$sql = "insert into member (account, password, realname) values (?,?,?)";

$pdo->prepare($sql)->execute([$account, $password,$realname]);
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$account, $password,$realname]);

//$rs = $pdo->query($sql);

//while($row= $rs->fetch()){
//    echo "{$row['id']}:{$row['account']}:{$row['password']}:{$row['realname']}<br>";
//}
//while($row= $rs->fetchObject()){
//    echo "{$row->id}:{$row->account}:{$row->password}:{$row->realname}<br>";
//}