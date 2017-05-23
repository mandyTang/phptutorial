<?php
function TWIDChecker(string $twId){
    $ret = 0;   // 格式錯誤
    if (preg_match('/^[A-Z][1|2][0-9]{8}$/', $twId) > 0) {
        $firstLetter = substr($twId, 0, 1);
        $letters = 'ABCDEFGHJKLMNPＱRSTUVXYWZ';
        $n12 = strpos($letters, $firstLetter) + 10;
        $n1 = (int)($n12 / 10);
        $n2 = $n12 % 10;
        $n3 = substr($twId, 1, 1);
        $n4 = substr($twId, 2, 1);
        $n5 = substr($twId, 3, 1);
        $n6 = substr($twId, 4, 1);
        $n7 = substr($twId, 5, 1);
        $n8 = substr($twId, 6, 1);
        $n9 = substr($twId, 7, 1);
        $n10 = substr($twId, 8, 1);
        $n11 = substr($twId, 9, 1);

        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
        if ($sum % 10 == 0) {
            $ret = 1;   // Pass
        } else {
            $ret = -1; //Fail
        }
    }
    return $ret;
}

?>