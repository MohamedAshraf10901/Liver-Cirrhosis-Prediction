<?php

function classify_text($text_path){

    $url = 'http://localhost:9000/classify';
    //data that you sent to Api
    $data = array('path' => $image_path);
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //transfer from jeson to array
    $result = json_decode($result, true);
    return $result;
    
}

?>
