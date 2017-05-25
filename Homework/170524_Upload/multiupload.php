<?php
$upload = $_FILES['upload'];
foreach($upload['error']as $index => $error){
    if ($error==0){
        copy($upload['tmp_name'][$index],
            "./upload/{$upload['name'][$index]}");
        echo "OK<br>";
    }else{
        echo "fail<br>";
    }
}
?>
<a type="button" href="opendir.php?dirname=.%2Fupload">Back</a>