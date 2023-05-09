<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <p><?php
    $kalimatString = "Aku sedang berada pada materi string preg_match()";
    $cari = "/preg_match()/";
    $ganti = "preg_replace";
    echo preg_replace($cari, $ganti, $kalimatString);

    //ini contoh penggunaan 1
    //echo preg_replace("/sudah/", "belum", "Karakter zilong sudah selesai");
    ?></p>

    <p>
    <?php
    $kalimatString1 = "Aku telah melalui pembelajaran javascript";
    $cari = "/javascript/";
    $ganti = "php";
    echo preg_replace($cari, $ganti, $kalimatString1);

    //ini contoh penggunaan 1
    //echo preg_replace("/sudah/", "belum", "Karakter zilong sudah selesai");
    ?></p>
    
</body>

</html>