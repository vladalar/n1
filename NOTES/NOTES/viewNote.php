<?php
function view($note_id){

    $note=file_get_contents($note_id);


    $data= array(
        'id' => '0',
        'title' => ' ',
        'content' => ' ',
        'dateCreated' => ' ',
        'dateModified' => ' '
    );

    $data=json_decode($data_encoded);

    echo json_decode($data_encoded);
}


loader();
?>