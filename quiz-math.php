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
    </style>
    <?php
        include 'header.php';
    ?>
</head>
<body>
    <div class="container">
        <div class="konten">
            <center>
                <h1>Selamat Datang di Quiz <b style="color: red;">Matematika</b></h1>
                <a href="quiz.php" class="button reset">Kembali</a>
                <hr>
                <h4>Silahkan Jawab Pertanyaan dibawah ini</h4>
                <br>                
                <h4>1351 = 64</h4>
                <h4>2622 = 48</h4>
                <h4>4514 = 49</h4>
                <h4>4040 = 80</h4>
                <h4>1351 = 64</h4>
                <h4>5712 = <strong>?</strong></h4>

                <br>
                <label for="">Clue : Poula</label>
                <br><br>
                <form action="" method="POST">
                    <div style="width: 50%;">
                        <label for="kata">Masukan Angka (ketik "menyerah" jika ingin selesai)</label>
                        <input type="text" id="kata" name="kata" required autofocus autocomplete="off">
                    </div>
                    <button type="submit" name="quiz-kata" class="button">Kirim</button>
                </form>
                <br>
                <?php 
                    if (isset($_POST['quiz-kata'])) { 
                        $nama = $_POST['kata']; 
                        if($nama == "69"){
                            echo "<h2> Berhasil 100 </h2>";
                        }elseif($nama == "menyerah"){
                            echo "Yah lemah banget , ketik 'saya lemah matematika' jika ingin tau jawabannya ";
                        }elseif($nama == "saya lemah matematika"){
                            echo " udah lah , makanya belajar hedeh hedeh ";
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