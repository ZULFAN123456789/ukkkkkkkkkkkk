<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PEDULI DIRI</title>
  </head>
  <body>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=sekola",'root', '');
        $query = $db->query("SELECT * FROM login");
        ?>
    

    <div class="container-sm">
        <a href="tambah.php "class="btn btn-info">Register</a>
        <a href="login.php "class="btn btn-info">Logout</a>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>nik</th>
                <th>nama_lengkap</th>
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td><?= $data['user'] ?></td>
                <td><?= $data['nama_lengkap'] ?></td>

                <td>
                    <a href="edit.php?nik=<?= $data['user'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?nik=<?= $data['user'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>

        </table>
        </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>