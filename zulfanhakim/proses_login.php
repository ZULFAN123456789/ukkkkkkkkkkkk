<?php
    include("koneksi.php");


    $user = $_REQUEST["user"];
    $namalengkap = $_REQUEST["Namalengkap"];



    $query = $koneksi->query("select * from login where nik='$user' AND Namalengkap='$namalengkap'")->fetchAll();
    

        header("Location:index.php");
    
?>