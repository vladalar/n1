<?php
require_once 'loadnotes.php';

function viewnote(){

$lines = file_get_contents(dirname(__FILE__) . '/saved/saved');

    echo str_replace("\n","&lt;br&gt;",$lines);


}


viewnote();