<?php
function show(){



    $data = array(
        'id' => 'id',
        'title' => 'title',
        'content' => 'textfield',
        'dateCreated' => 'fourthValue',
        'dateModified' => 'fifthValue'
    );
    $data_encoded = json_encode($data);

    echo  $data_encoded;

    echo json_decode($data_encoded);

}


show();
?>