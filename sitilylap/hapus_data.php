<?php 

$nis = $_GET['nis'];

$database = new PDO("mysql:host=localhost;dbname=db2023_lyla",'root','');
$query = $database->query("DELETE FROM tbDataSiswa where nis = '$nis'");

if($query){
   header("Location:tampilan_data.php");
}