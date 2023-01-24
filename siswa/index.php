<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini halaman siswa</h1>

    <?php 
        foreach ($siswa as $siswa) {
            echo "<p> Nama : ". $siswa['nama']. "</p>";
            echo "<p> kelas :". $siswa['kelas']. "</p>";
        }
    ?>
</body>
</html>