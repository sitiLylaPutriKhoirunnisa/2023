<?php

$koneksi = new PDO("mysql:host=localhost;dbname=db2023_lyla","root","");
$query = $koneksi->query("select * from tbDataSiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <style>
        .select {
            border: 1px solid black;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
<h2>DATA SISWA</h2>
    
    <table class="table table-striped table-bordered mt-5">
    <tr >
        <td>Nis</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Aksi</td>
    </tr>
    <?php
        while ($data = $query->fetch()){ ?>
    <tr >
        <td><?php echo $data["nis"] ?></td>
        <td><?php echo $data["nama"] ?></td>
        <td><?php echo $data["kelas"]?></td>
        <td><a href="form_update.php?nis=<?= $data['nis']?>" class="btn btn-success btn-sm">Update </a>
            <a href="hapus_data.php?nis=<?= $data['nis']?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
        
    </tr>
    <?php } ?>
       
    </table>
    
    
    <a href="form_isidata.php" class="btn btn-primary">Isi Data</a>
    
    </div>
</body>
</html>