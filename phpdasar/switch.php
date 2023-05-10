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

        $day = "senin";
        switch ($day) {
            case "senin":
                echo "hari ini adalah hari senin";
                break;
            case "selasa":
                echo "hari ini adalah hari selasa";
                break;
            case "rabu":
                echo "hari ini adalah hari rabu";
                break;
            case "kamis":
                echo "hari ini adalah hari kamis";
                break;
            case "jumat":
                echo "hari ini adalah hari jumat";
                break;
            default:
                echo "hari ini libur. turu aja dulu!";
        }
    
    ?>
</body>

</html>