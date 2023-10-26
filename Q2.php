<?php

    $data = json_decode(file_get_contents("php://input"),true);

    $arr = $data['numArr'];
//    var_dump($arr);

    $evenNumbers = array_filter($arr, function ($num){
        return $num % 2 == 0;
    });

    $evenNumbers = array_values($evenNumbers);

    echo json_encode($evenNumbers);









