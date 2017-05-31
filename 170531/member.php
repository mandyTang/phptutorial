<?php
// 1. connect to MySQL Server
// 2. select a database
//$conn = @mysqli_connect(
//    '127.0.0.1:3306','root','root', 'iii') or die ("Server Busy");
//if($conn){
//    echo 'OK!';
//}
$db = @new mysqli(
    '127.0.0.1:3306',
    'root','root', 'iii');
echo $db->error;
// 3. query 下句法
//$sql = 'insert into member (account, password, realname) value ("Mandy","123456789","Mandy Tang")';
$sql = 'select * from member';
$result = $db->query($sql);
//if ($result){
//    echo 'OK!';
//}else{
//    echo 'Error!';
//}
//$row = $result->fetch_object();
//echo $row->id.'<br>';
//echo $row->account.'<br>';
//echo $row->password.'<br>';
//echo $row->realname.'<br>';
//echo '<hr>';
//$row = $result->fetch_object()
//echo $row->id.'<br>';
//echo $row->account.'<br>';
//echo $row->password.'<br>';
//echo $row->realname.'<br>';
while ($row = $result->fetch_object()){
    echo "{$row->id} : {$row->account} : {$row->password} : {$row->realname}.<br>";
}
// 4. close (通常不做 一位會拉拉扯扯)

// server