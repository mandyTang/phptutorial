<a type="button" href="Caculate-5.php">HW 01</a>
<a type="button" href="Caculate-7.php">HW 02</a>
<a type="button" href="Caculate-8.php">HW 03</a>

<h1>閏年計算--Assignment 2/3</h1>
<h3>曆年比回歸年的時間總是少了一點點</h3>
<p>天文館指出，累積4年後多的0.96876天，與真正的一日尚差0.03124天，<br>
    如果不間斷地按4年一閏的方式修正，百年後將累積成365×100+25＝36525日，<br>
    又比真正的一世紀日數365.24219×100＝36524.219多了一點點。
</p>
<h5>因此，曆法學家便重新規定西元年份閏年的規則為：</h5>
<ul>
    <li>今年是否為潤年？</li>
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