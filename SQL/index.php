<?php
require 'connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="alert alert-info">Data Mahasiswa</div>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a> <br> <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="10px">No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $sql = "SELECT * FROM mahasiswa";
        $result = $conn->query($sql);
        while ($isi = $result->fetch_object()) :
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $isi->nim; ?></td>
                <td><?= $isi->nama; ?></td>
                <td><?= $isi->alamat; ?></td>
                <td></td>
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
    </table>
</div>
</body>
</html>