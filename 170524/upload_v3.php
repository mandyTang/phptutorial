<?php
    $upload = $_FILES['upload'];
    //echo gettype($upload);
    if ($upload['error']==0){
        echo $upload['name'];
        if (copy($upload['tmp_name'],
            "./upload/{$upload['name']}")){
            echo 'Upload Ok!';
        }else{
            echo 'Fail';
        }
    }
?>
<!--
upload 的 ./upload 路徑需要放置到function同層的資料夾
>
