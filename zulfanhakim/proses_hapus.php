<?php
include('koneksi.php');

$nik = $_GET['nik'];

$db = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
$query = $db->query("DELETE FROM akun WHERE nik='$nik'");

if($query){
    header("location:index.php");
}
?>