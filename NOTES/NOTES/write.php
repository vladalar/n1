<?php
$filename = $_POST['title'];
$data= $_POST['textfield'];

if(isset($_POST['title']) && !empty($filename) && isset($_POST['textfield']) && !empty($data) )
{
    $a=__FILE__;
    $ret = file_put_contents( dirname(__FILE__) . '/saved/' . $filename.'.txt', $filename . "\r\n" . "\r\n" . $data. "\r\n" .  "\r\n" ."This note was created  " .date("l") . ", " . date("d/m/Y") . "\r\n"
. "Last update  " . date("l") . ", " . date("d/m/Y"), FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        header("Location: http://pixy.local/NOTES/index.php");
        die();

    }
}
else {
    die('no post data to process');
}