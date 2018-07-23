<?php
function loader($note_id){

    $note=file_get_contents($note_id);




    $data= array(
        'id' => 'firstValue',
        'title' => 'secondValue',
        'content' => 'thirdValue',
        'dateCreated' => 'fourthValue',
        'dateModified' => 'fifthValue'
    );

    $data_encoded = json_encode($data);

    return $data_encoded;
}


loader();
?>