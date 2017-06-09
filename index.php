<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
    <title>Click me!</title>
    <style>
        html {
            font-family: 'Patrick Hand SC', cursive;
        }

        h1 {
            text-align: center;
            padding-top: 20vh;
            font-size: 60px;
            color: white;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #name {
            text-align: center;
            width: 100%;
            border: none;
            height:30px;
            transition:0.5s;
        }

        #sub {
            border: none;
            background-color:white;
            color:black;
            transition:0.5s;
        }
        #sub:hover{
            background-color:black;
            color:white;
        }

        body {
            background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('goat_bg.jpg');
        }
        .in{
            width:40%;
            display:flex;
        }
    </style>
</head>

<body>
    <h1>Click the goat!</h1>
    <form action="game.php" method="POST">
        <div class="in">
            <input type="text" placeholder="Enter your name here!" id="name" name="name">
            <input type="submit" value="Submit" id="sub">
        </div>
    </form>
    <script src="js/main.js"></script>
</body>

</html>