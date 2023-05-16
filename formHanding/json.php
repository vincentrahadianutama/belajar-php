<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP FORM HANDLING</title>
</head>

<body>
    
    <?php
    //json_endcode
    $kelas = array(
        'x'=>'kelas 10',
        'xi'=>'kelas 11',
        'xii'=>'kelas 12',
    );
    echo json_encode($kelas);
    //pakai foreach untuk perulangan data array
         foreach($kelas as $array){
        echo $array.'<br>';
         }
    echo "<br>";

    $kelasDecode = '{"x": 10, "xi": 11, "xii": 12}';
    
    $object = json_decode($kelasDecode);
    print $object->{'x'};
?>


</body>

</html>