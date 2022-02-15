<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman Utama</title>
    <style>
        input[type=text] {
            width: 10%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid cornflowerblue;
            border-radius: 4px;
        }
    </style>
    <?php
        include 'header.php';

        $nama = null;
    ?>
</head>
<body>
    
    <div class="container">
        <div class="konten">
            <center>
                <h1>
                    Selamat Datang 
                    <strong><?php if (isset($_POST['submit'])) { $nama = $_POST['nama']; echo $nama; } ?></strong> 
                    di web Prof Strange
                </h1>

                <?php if($nama == null) { ?>
                    <form action="" method="POST">
                        <label for="">Nama Anda : </label>
                        <input type="text" name="nama" placeholder="Masukan nama anda" autofocus autocomplete>
                        <button type="submit" class="button" name="submit">Submit</button>
                    </form>
                <?php }else{  ?>
                    <form action="" method="POST">
                        <button type="submit" class="button reset" name="reset">Ubah Nama</button>
                    </form>
                <?php } ?>
                <img src="img/tekateki.jpg" alt="Teka Teki">
                
            </center>
        </div>
    </div>

</body>
</html>