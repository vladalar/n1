<?php
function show($note_id){

    $note=file_get_contents($note_id);

    $data = array(
        'id' => 'id',
        'title' => 'title',
        'content' => 'textfield',
        'dateCreated' => 'fourthValue',
        'dateModified' => 'fifthValue'
    );
    $data_encoded = json_encode($data);

    echo  $data_encoded . '<br>';

    echo json_decode($data_encoded);

}


show();
?>