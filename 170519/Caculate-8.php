<a type="button" href="../Homework/170519_Count.php">HW 01</a>
<a type="button" href="../Homework/170519_LeapMonth.php">HW 02</a>
<a type="button" href="Homework3.php">HW 03</a>

<h1>萬年曆計算--Assignment 3/3</h1>
<h5>因此，曆法學家便重新規定西元年份閏年的規則為：</h5>
<ul>
    <li>1年1/1星期ㄧ。</li>
    <li>1752年9/2星期三，9/14星期四。</li>
    <li>逢4的倍數閏，例如：西元1996、2012、2016年等，為4的倍數，故為閏年。</li>
    <li>逢100的倍數不閏，例如：西元1800、1900、2100年，為100的倍數，當年不閏年。</li>
    <li>逢400的倍數閏，例如：西元1600、2000、2400年，為400的倍數，有閏年。</li>
    <li>逢4000的倍數不閏，例如：西元4000、8000年，不閏年。</li>
</ul>
<p>from: <a href="http://www.ettoday.net/news/20120229/28257.html" target="_blank">東森新聞雲</a></p>
<?php
$year = $_GET["year"];
$Y = "西元 " . $year . " 年是閏年！";
$F = "西元 " . $year . " 年不是閏年！";
?>
<form>
    <p>今年是否閏年？</p>
    <input type="text" id="year" name="year" value="<?php echo $year; ?>">
    <input type="submit" value="？">
    <span id="result">
        <?php
        if ($year % 4000 == 0) {
            echo $F;
        } elseif ( $year % 400 == 0) {
            echo $Y;
        } elseif ($year % 100 == 0) {
            echo $F;
        } elseif ($year % 4 == 0) {
            echo $Y;
        } else {
            echo $F;
        }
        ?>
    </span>
</form>
