<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Biasa</title>
    <style>
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
    <?php
        include 'header.php';
    ?>
</head>
<body>
    <div class="container">
        <div class="konten">
            <center>
                <h1>Selamat Datang di Quiz Biasa</h1>
                <a href="quiz.php" class="button reset">Kembali</a>
                <hr>
                <h4>Silahkan Jawab Pertanyaan dibawah ini</h4>
                <h4>Apa itu <b>Semantik HTML</b> ??</h4>
                <br>
                <label for="">Clue : clear</label>
                <br><br>
                <form action="" method="POST">
                    <div style="width: 50%;">
                        <label for="kata">Masukan Jawaban</label>
                        <select name="jawaban" id="">
                            <option value="1">Pemantik HTML</option>
                            <option value="2">Tag yang berisi kata keren</option>
                            <option value="3">Tag yang dapat memlulihkan tag sebelumnya</option>
                            <option value="4">Tag yang kegunaannya jelas</option>
                            <option value="5">Tag yang kegunaannya tidak jelas</option>
                        </select>
                    </div>
                    <button type="submit" name="quiz-kata" class="button">Kirim</button>
                </form>

                <?php 
                    if (isset($_POST['quiz-kata'])) { 
                        $nama = $_POST['jawaban']; 
                        if($nama == "4"){
                            echo "<h2> Berhasil 100 </h2>";
                        }else{
                            echo "<h2> Salah dicoba lagi yok </h2>";
                        }
                    } 
                    ?>
            </center>
        </div>
    </div>
</body>
</html>