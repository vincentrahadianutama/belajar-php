<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP FORM HANDLING</title>
</head>

<body>
    <!-- metode Get 
    <form action="./get-data.php" method="GET">
        <div style="margin-bottom: 3px;">
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan nama anda"/>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="number">kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Isi kelas anda"/>
        </div>
        <input type="submit" value="Simpan">
    </form>-->
 
    <!-- metode POST -->
    <form action="./get-data.php" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan nama anda"/>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="number">kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Isi kelas anda"/>
        </div>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>