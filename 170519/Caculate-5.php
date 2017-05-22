<a type="button" href="Homework1.php">HW 01</a>
<a type="button" href="Homework2.php">HW 02</a>
<a type="button" href="Homework3.php">HW 03</a>

<h1>PHP 加減乘除 Assignment 1/3</h1>
<p>10/3=3.33333 ===> 顯示3餘1</p>
<?php
if (isset($_POST["options"])){
    $x = $_GET["x"];
    $y = $_GET["y"];
    $options = $_POST["options"];
    $r = "$x";
}
?>
<form method="post" action="#">
    <input type="text" id="x" name="x" value="<?php echo $x; ?>">
    <select id="options" name="options">
        <option <?php if ($options == 0 ) echo 'selected' ; ?>value="0">+</option>
        <option <?php if ($options == 1 ) echo 'selected' ; ?>value="1">-</option>
        <option <?php if ($options == 2 ) echo 'selected' ; ?>value="2">*</option>
        <option <?php if ($options == 3 ) echo 'selected' ; ?>value="3">/</option>
    </select>
    <input type="text" id="y" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <sapn id="result">
        <?php
            echo $r;
        ?>
    </sapn>
</form>