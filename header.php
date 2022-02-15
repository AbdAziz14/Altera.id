<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            margin:0;
            font-family: "Lucida Console", "Courier New", monospace;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0F1619;
            position: fixed;
            top: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #33495D;
        }

        .active {
            background-color: #627F96;
        }

        .button {
            background-color: cornflowerblue;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .reset {
            font-size: 14px;
            background-color: salmon;
        }
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        <li><a href="about.php">Tentang Pembuat</a></li>
    </ul>
</body>
</html>