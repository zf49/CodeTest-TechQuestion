<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Book List from API</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: inline-block;
            margin: 1em;
        }

        li > div {
            display: inline-block;
            vertical-align: top;
            margin-right: 20px;
        }

        img {
            max-width: 100px;
            margin-right: 20px;
        }

        .bold {
            font-weight: bold;
        }


    </style>
</head>
<body>
<h1>Q3 display data</h1><hr>

<ul>

    <button id="fetchDataBtn" onclick="getBooksData()">Display Data</button>
    <a href="/Q3.php" ><button>Q3 API</button></a>
    <div id="dataDetail"></div>


    <script>

        let getBooksData = ()=>{
            axios.get("/Q3.php").then(res=>{

                let output = "<div>";
                for (var i in res.data) {
                    let book = res.data[i];
                    output += "<ul><li>" +
                        "<div><img src='" + book['image'] + "' alt='" + book['title'] + "'></div>" +
                        "<div><span class='bold'>Name:</span> " + book['title'] + "<br>" +
                        "<span class='bold'>Author:</span> " + book['author'] + "<br>" +
                        "<span class='bold'>Description:</span> " + book['description'] + "</div>" +
                        "</li></ul>";
                }
                output += "</div>";

                document.getElementById('dataDetail').innerHTML = output;


            }).catch(err=>console.log(err))
        }



    </script>


</ul>
</body>
</html>
