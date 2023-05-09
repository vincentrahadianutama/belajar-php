<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
   <h2> <?php
    $karakter = "Saat ini Saya Sudah Mencapai Materi php";
    echo "Karakter yang diubah menjadi huruf kecil : ". strtolower($karakter);
    ?></h2>

    <h2>
    <?php
    $karakter1 = "Aku telah melalui tahapan BELAJAR php string, sekarang telah mencapai tahapan STRTOLOWER()";
    echo "Karakter yang diubah menjadi huruf kecil : ". strtolower($karakter1);
    ?>
    </h2>
    
</body>

</html>