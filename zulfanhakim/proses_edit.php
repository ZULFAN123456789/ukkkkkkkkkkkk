<?php

$niklama = $_GET["nik"];
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];


$db = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
$query = $db->query("UPDATE `akun` SET nik='$nik',nama_lengkap='$nama_lengkap' where nik='$niklama'");

if($query){
    header("location:index.php");
}