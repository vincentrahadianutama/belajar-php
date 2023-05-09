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
    $kelompok = "Syahru,Ilham,Farhan,Alam";
    $explode = explode(",", $kelompok);
    print_r($explode); 
    ?></p>
    <p><?php
    $bahasa = "html,css,javascript,php";
    $explode1 = explode("-", $bahasa);
    print_r($explode1); 
    ?></p>
</body>

</html>