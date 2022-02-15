<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 380px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            margin: auto;
            text-align: center;
        }
    </style>
    <?php
        include 'header.php'
    ?>
</head>
<body>
    
    <div class="container">
        <div class="konten">
            <center>
                <h1>Selamat Datang di <strong>Quiz</strong></h1>
                <img src="img/quiz.svg" alt="Quiz" width="25%">

                <h3>Silahkan Pilih :</h3>
                            

                <div class="grid-container" style="align: center;">
                    <?php for ($i=0; $i < 3; $i++) { ?>
                        <?php if($i == 1) { ?>
                            <div class="grid-item">
                                <div class="gallery">
                                    <a href="quiz-normal.php">
                                        <img src="img/quiz-normal.jpg" alt="Cinque Terre" width="600" height="400">
                                    </a>
                                    <div class="desc">Quiz Normal</div>
                                </div>
                            </div>
                        <?php }elseif($i == 2) { ?>
                            <div class="grid-item">
                                <div class="gallery">
                                    <a href="quiz-math.php">
                                        <img src="img/quiz-math.jpg" alt="Cinque Terre" width="600" height="400">
                                    </a>
                                    <div class="desc">Quiz Matematika</div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="grid-item">
                                <div class="gallery">
                                    <a href="quiz-kata.php">
                                        <img src="img/quiz-kata.jpg" alt="Cinque Terre" width="600" height="400">
                                    </a>
                                    <div class="desc">Quiz Kata</div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </center>
        </div>
    </div>

</body>
</html>