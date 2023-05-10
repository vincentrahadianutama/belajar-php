<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP </title>
</head>

<body>
    <?php

        $nilaiTugas = 100;
        if ($nilaiTugas >= 90){
            echo "selamat anda lulus dengan nilai diatas rata-rata";
        } elseif ($nilaiTugas >= 80){
            echo "selamat anda lulus";
        } elseif ($nilaiTugas <= 80){
            echo "anda harus belajar lagi";
        }
    
    ?>
</body>

</html>