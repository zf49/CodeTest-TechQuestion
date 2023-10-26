<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <input type="text" id="city" placeholder="input city name">
    <button onclick="getWeather()">Get Weather</button>
    <h1 id="err"></h1>

    <div id="detail">
        <h3>City Name: <span id="cityName"></span></h3>
        <h3>Weather: <span id="weather"></span></h3>
        <h3>Average Temp: <span id="temp">°C</span></h3>
        <h3>Max Temp: <span id="temp_max">°C</span></h3>
        <h3>Min Temp: <span id="temp_min">°C</span></h3>
        <h3>Wind Speed: <span id="wind_speed">m/s</span></h3>
    </div>

    <script>

        let getWeather = ()=>{
            let cotyName = document.getElementById('city').value;
            console.log(cotyName)
            axios.post("/Q4.php",{cityName:cotyName}).then((res)=>{
                document.getElementById("err").innerHTML = "";

                if(res.data.cod == "200"){
                    document.getElementById("cityName").innerHTML = res.data.cityName
                    document.getElementById("temp").innerHTML = res.data.temp
                    document.getElementById("temp_max").innerHTML = res.data.temp_max
                    document.getElementById("temp_min").innerHTML = res.data.temp_min
                    document.getElementById("weather").innerHTML = res.data.weather
                    document.getElementById("wind_speed").innerHTML = res.data.wind_speed
                }else {
                    document.getElementById("err").innerHTML = res.data
                }

            })
        }


    </script>

</body>
</html>
