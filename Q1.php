<?php

    $data = json_decode(file_get_contents("php://input"));

//    var_dump( $data->name);

    if(isset($data->name) && !empty($data->name)) {
        echo "Hello, ".$data->name."!";
    } else {
        echo "pls input ur name";
    }

