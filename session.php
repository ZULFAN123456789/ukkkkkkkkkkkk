<?php
session_start();
$NIK = $_POST["NIK"];
$namalengkap = $_POST["namalengkap"];

$koneksi = new PDO('mysql:host=localhost;dbname=webb', 'root', '');
$query = $koneksi->query("select * from tblogin where nik='$NIK' AND namalengkap='$namalengkap'");
$data = $query->fetch();
if($query->rowCount() > 0){
    
}else{
    header("Location:index.html");
}