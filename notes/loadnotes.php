<?php
function loadnotes(){

    $json_data=file_get_contents(dirname(__FILE__) . '/saved/saved');
    $data = json_decode($json_data);

    return $data;
}

/**
 * @param $note_id
 * @return array|mixed|object
 */
function loadnote($note_id ){
    $notes = loadnotes();

    if ( ! empty( $notes[ $note_id ] ) ) {
        return $notes[ $note_id ];
    }

    return false;
}



