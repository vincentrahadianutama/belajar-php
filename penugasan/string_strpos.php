<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $strpos = "Saat ini saya sudah mencapai materi php";
    $searchStrpos = "php"; "Javascript";
    echo strpos($strpos, $searchStrpos);

    $strpos1 = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos";
    $searchStrpos1 = "belajar php string"; "strlen";
    echo strpos($strpos1, $searchStrpos1);
    ?>
</body>

</html>