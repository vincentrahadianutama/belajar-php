<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1><?php
    $karakter = "Saat ini saya sudah mencapai materi php";
    echo "Karakter yang diambil : ". substr($karakter, 0, 10);
    ?></h1>
    <p>
        <?php
    $karakter1 = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr";
    echo "Karakter1 yang diambil : ". substr($karakter, 3, 20);
    ?></p>
</body>

</html>