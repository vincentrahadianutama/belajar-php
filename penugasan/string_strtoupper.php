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
    echo "Karakter yang diubah menjadi huruf besar : ". strtoupper($karakter);
    ?></h1>

    <h2>
    <?php
    $karakter1 = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strtoupper()";
    echo "Karakter1 yang diubah menjadi huruf besar : ". strtoupper($karakter1);
    ?> 
    </h2>
</body>

</html>