<?php
if (isset($_GET["x"])){
    $x = $_GET["x"];
    $y = $_GET["y"];
    $r = $x + $y;
}
?>
<form>
    <input type="text" id="x" name="x" value="<?php echo $x; ?>">+
    <input type="text" id="y" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <sapn id="result">
        <?php
            echo $r;
        ?>
    </sapn>
</form>