<?php
    function createLottery(){
        $lottery = range(1,49);
        shuffle($lottery);
        for ($i=0; $i<6; $i++){
            $ret[] = $lottery[$i];
        }
        sort($ret);
        return $ret;
    }
?>