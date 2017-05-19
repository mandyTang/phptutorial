<h1>PHP & Javascript Assignment 01</h1>
<p>10/3=3.33333 ===> 顯示3餘1</p>
<?php
if (isset($_GET["x"])){
    $x = $_GET["x"];
    $y = $_GET["y"];
    $r = $x + $y;
}
?>
<form>
    <input type="text" id="x" name="x" value="<?php echo $x; ?>">
    <select>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" id="y" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <sapn id="result">
        <?php
            echo $r;
        ?>
    </sapn>
</form>