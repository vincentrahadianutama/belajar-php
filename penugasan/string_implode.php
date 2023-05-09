<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
   <p> <?php
    $kelompok = array("Bintang", "Arya", "Arif", "Syahru");
    $implode = implode("/", $kelompok);
    echo $implode;
    ?></p>
    <p>
    <?php
    $bahasa = array("html", "css", "javascript", "php");
    $implode1 = implode("-", $bahasa);
    echo $implode1;
    ?></p>
</body>

</html>