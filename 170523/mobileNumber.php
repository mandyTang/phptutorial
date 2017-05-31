<h1>Mobile Number Checker</h1>
<?php
    if(isset($_GET['mbNum'])){
        $mbNum = $_GET['mbNum'];
    }
    $mb = '0923-777777';
    $pattern='/ˆ09[0-8][0-9]-[0-9]{6}$/';
    $r = preg_match($pattern,$mb);
//    $x = true;
    echo $r;
?>

<form>
    <input type="text" name="mbNum" value="">
    <input type="submit" name="checker" value="check">
</form>