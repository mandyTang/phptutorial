<?php
    date_default_timezone_set ( "Asia/Taipei" );
    $dirname = ".";
    if (isset($_GET['dirname'])){
        $dirname = $_GET['dirname'];
        if (isset($_GET['filename'])){
            //delete
            $delfile = $_GET['filename'];
            unlink("{$dirname}/{$delfile}");
        }
    }
    $fp = opendir($dirname) or die('Server Shut Down');
?>
<form>
    <input name="dirname" type="text">
    <input type="submit" value="chdir">
</form>
<form action="multiupload.php" method="post" enctype="multipart/form-data">
    <input name="upload[]" type="file">
    <input type="submit" value="Upload">
    <input name="upload[1]" type="file">
    <input type="submit" value="Upload">
    <input name="upload[2]" type="file">
    <input type="submit" value="Upload">
</form>
<hr>
<table width="100%" border="1">
    <tr>
        <th>FileName</th>
        <th>Type</th>
        <th >Size</th>
        <th>mTime</th>
        <th>Delete</th>
        <th>Download</th>
    </tr>
    <?php
        //$fp = opendir($dirname) or die('Server Shut Down');
        //$fp = opendir($dirname) or exit('Server Shut Down');
        //echo 'Ok';
        while ($file = readdir($fp)){
            echo '<tr>';
            echo "<td>.{$file}.</td>";
            $type ="";
            if(is_dir("{$dirname}/{$file}")){
                $type = 'Dir';
            }else if(is_file("{$dirname}/{$file}")){
                $type = 'File';
            };
            echo "<td>{$type}</td>";
            echo "<td>" . filesize( "{$dirname}/{$file}"). "</td>";
            echo "<td>" . date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}")) . "</td>";
            //echo "<td><a href='?delfile={$dirname}/{$file}'>Delete</a></td>";
            echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm ('Delete ?')\">Delete</a></td>";
            echo "<td><a href='?filename={$file}' download> Download </a></td>";
            echo "</tr>";
        }
    ?>
</table>

<!--is_dir or is_link-->