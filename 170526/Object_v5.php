<?php
include "bradapi.php";
session_start();
if(!isset($_SESSION['cart']))
    // 如果session cart is empty the web page lead to Object_v4.php
    header('Location: Object_v4.php');
$cartObj = $_SESSION['cart'];
$var1 = $_SESSION['var1'];

echo 'Page 2<hr>';
echo $var . '<br>';

$list = $cartObj -> getList();
foreach ($list as $pid => $qty){
    echo "{$pid} : {$qty}<br>";
}
?>
<hr>
<a href="logout.php">Logout?</a>
