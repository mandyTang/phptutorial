<?php
include "bradapi.php";

// static 進行分類 程式才會結構化
if(TWID::checkId('A123456789')==1){
    $myId = new TWID('A123456791');
    echo $myId ->getGender()?'Male':'Female';
    $Id2 = new TWID('A223456789');
    $Id3 = new TWID('A123456789');
    $Id4 = new TWID('A123456789');
    echo TWID::$counter;
}else{
    echo 'Who are you?';
}

?>