<a type="button" href="170519_Count.php">HW 01</a>
<a type="button" href="170519_LeapMonth.php">HW 02</a>
<a type="button" href="Homework3.php">HW 03</a>
<h1>PHP 加減乘除 Assignment 1/3</h1>
<p>EX: 10/3=3.33333 ===> 顯示3餘1</p>
<?php
if (isset($_GET["x"])){
    $x = $_GET["x"];
    $y = $_GET["y"];
    $s = $_GET["taskOption"];
    $e = "=";
}
?>
<form>
    <input type="text" id="x" name="x" value="<?php echo $x; ?>">
    <!-- Initializing Name With An Array-->
    <select name="taskOption">
        <option value="+" <?php if($s=="+"){echo "selected";};?>>+</option>
        <option value="-" <?php if($s=="-"){echo "selected";};?>>-</option>
        <option value="*" <?php if($s=="*"){echo "selected";};?>>*</option>
        <option value="/" <?php if($s=="/"){echo "selected";};?>>/</option>
    </select>
    <input type="text" id="y" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="==>">
    <sapn id="result">
        <?php
            echo "$x $s $y $e $r";
            if ($s == "+") {
                $r = $x + $y;
                echo $r;
            } elseif ($s == "-") {
                $r = $x - $y;
                echo $r;
            } elseif ($s == "*") {
                $r = $x * $y;
                echo $r;
            } elseif ($s == "/") {
                if ($x % $y == 0) {
                    $r = $x / $y;
                    echo $r;
                } else {
                    $a = floor($x / $y);
                    $l = $x % $y;
                    $r = "$a 餘 $l";
                    echo $r;
                }
            } else {
                $r = "Please Type Numbers!";
                echo $r;
            }
            ?>

    </sapn>
</form>
