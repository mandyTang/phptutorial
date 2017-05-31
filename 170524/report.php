<?php
$account = $_GET["account"];
$password = $_GET["password"];
$birthday = $_GET["birthday"];
$area = $_GET["area"];
$gender = $_GET["gender"];
$interest = $_GET["Interests"];
$message = $_GET["message"];
echo 'Name: '.$account.';<br>';
echo 'Password: ' . $password. ';<br>';
echo 'Birthday: '.$birthday.';<br>';
echo 'Zip Code: '.$area.';<br>';
echo 'Gender: '.$gender.';<br>';
foreach ($interest as $item){
    echo 'Interest: '.$item.';<br>';
}
echo 'Message: '.$message.';<br>';