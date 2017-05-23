<h1>Taiwan ID Checker</h1>
<?php
    include 'TWIDapi.php';
    if (isset($_GET['twId'])){
        $twId = $_GET['twId'];
        echo TWIDChecker($twId);
    }
?>
<form>
    <input name="twId" type='text' value="">
    <input name="checker" type="submit" value="check">
</form>