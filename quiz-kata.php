<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Kata</title>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        td {
            padding: 15px;
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
                <h1>Selamat Datang di Quiz Kata</h1>
                <a href="quiz.php" class="button reset">Kembali</a>
                <hr>
                <h4>Silahkan Jawab Pertanyaan dibawah ini</h4>
                <table border="1">
                    <tr>
                        <!-- p e m o g r a m a n  w e b -->
                        <td>m</td>
                        <td>b</td>
                        <td>e</td>
                        <td>e</td>
                        <td>a</td>
                        <td>n</td>
                        <td>m</td>
                        <td>r</td>
                        <td>a</td>
                        <td>g</td>
                        <td>w</td>
                        <td>p</td>
                        <td>o</td>
                    </tr>
                </table>
                <br>
                <label for="">Clue : Mata Kuliah</label>
                <br><br>
                <form action="" method="POST">
                    <div style="width: 50%;">
                        <label for="kata">Masukan Kata</label>
                        <input type="text" id="kata" name="kata" required autofocus autocomplete="off">
                    </div>
                    <button type="submit" name="quiz-kata" class="button">Kirim</button>
                </form>

                <?php 
                    if (isset($_POST['quiz-kata'])) { 
                        $nama = $_POST['kata']; 
                        if($nama == "pemograman web"){
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