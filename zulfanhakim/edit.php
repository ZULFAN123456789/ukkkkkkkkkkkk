<?php 
    $nik = $_GET['nik'];
    $database = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
    $query = $database->query("SELECT * FROM akun WHERE nik=$nik");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php?nik=<?= $nik ?>" method="post">
        <input type="hidden" name="nik" value="<?= $nik ?>">
        <div>
            <label>nik</label>
            <input type="text" name="nik" value="<?= $data['nik'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>nama_lengkap</label>
            <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     