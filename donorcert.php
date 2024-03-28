
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body{
            width: 100%;
            box-sizing: border-box;
        }
        .container{
            margin: 0;
            padding: 0;
            width: 100%;
            /* background-color: antiquewhite; */
        }
        .container input{
            background-color: #fff;
            border: 3px solid black;
            width: 45%;
            height: 50px;
            margin: 1.2rem;
            padding: 5px;
        }
        .container a{
           text-decoration: none;         
        }
        .container button{
            padding: 20px;
            background-color: green;
            display:inline-block;
        }
        .container button:hover{
            background: #ebe9e9;
            cursor: pointer;   
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Certificate Generator</h1>
        <label> Name: </label>
        <input type="text" id="name">
            <button><a href="#" id="download-btn">Download</a></button>
        <br>
        <canvas id="canvas" height="550px" width="750px"></canvas>

    </div>


    <script src="../donorcertstyle.js">
        
    </script>
</body>
</html>
