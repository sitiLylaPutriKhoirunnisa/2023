<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];

$database = new PDO('mysql:host=localhost;dbname=db2023_lyla','root','');

$query = $database->query("UPDATE `tbDataSiswa` SET `nama`='$nama',`kelas`='$kelas' WHERE `nis`='$nis'");

header('location:tampilan_data.php');