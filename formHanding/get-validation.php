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
        $namaLengkap = "";
        $kelas ='';

        if($_SERVER ["REQUEST_METHOD"] === "POST") {
            $namaLengkap = dataType($_POST['namaLengkap']);
            $kelas = dataType($_POST['kelas']);
        }
        function dataType($dataKelas){
            $inputData = trim($dataKelas);
            $inputData = stripslashes($dataKelas);
            $inputData = htmlspecialchars($dataKelas);
            return $inputData;
        }
        ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">username</label>
            <input type="text" id="username" name="namaLengkap" placeholder="Masukkan nama anda"/>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="number">kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Isi kelas anda"/>
        </div>
        <input type="submit" value="Simpan">
    </form>

    <?php 
    echo "<br>";
    echo "Nama lengkap saya ".$namaLengkap;
    echo "<br>";
    echo "kelas saya ".$kelas;
    ?>
</body>

</html>