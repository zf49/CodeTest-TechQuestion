<?php

    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = [
        '/Q1' => 'Q1.html',
        '/Q2' => 'Q2.html',
        '/Q3' => 'Q3_display.php',
        '/Q4' => 'Q4_display.php',
        '/' => 'index.php',
    ];

    if (basename($_SERVER['PHP_SELF']) !== 'index.php') {
        if (array_key_exists($requestUri, $routes)) {
    //        echo $routes[$requestUri]."<br>";
            require $routes[$requestUri];
        } else {
            require 'index.php';
        }
    }
