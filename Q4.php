<?php

$key = "52904faf2fd5921ea491c99b21c02473";


$data = json_decode(file_get_contents("php://input"));

if (!isset($data->cityName) || empty($data->cityName)) {
        echo "Pls input city";
        die();
    }

$cityName = $data->cityName;

$openWeatherApi = "https://api.openweathermap.org/data/2.5/weather?q=$cityName&appid=".$key;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $openWeatherApi);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);
$decodedResponse = json_decode($response);
//var_dump $response;

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {

        // Kelvin convert to degree celsius: 274.15K − 273.15 = 1°C
        $cityWeather =
            ["cityName"=>$decodedResponse->name,"temp"=>number_format($decodedResponse->main->temp-273.15,1),
                "temp_max"=>number_format($decodedResponse->main->temp_max-273.15,1),
                "temp_min"=>number_format($decodedResponse->main->temp_min-273.15,1),
                "weather"=>$decodedResponse->weather[0]->main,
                "wind_speed"=>$decodedResponse->wind->speed,
                "cod"=>$decodedResponse->cod
            ];

        echo json_encode($cityWeather);

    } else {

        if ($decodedResponse !== null && isset($decodedResponse->message)) {
            echo json_encode($decodedResponse->message);
        } else {
            echo "An error occurred, but no message was provided";
        }
    }

curl_close($ch);





