<?php
if(isset($_POST['title']) && isset($_POST['textfield'])) {
    $filename = $_POST['title'];
    $data= $_POST['textfield'];
    $a=__FILE__;
    $b=$_SERVER['SCRIPT_FILENAME'];
    $ret = file_put_contents( dirname(__FILE__) . '/saved/' . $filename.'.txt', $filename . "\r\n" . $data, FILE_APPEND | LOCK_EX);
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