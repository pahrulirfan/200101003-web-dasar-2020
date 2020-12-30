<?php
// ambil file koneksi
require 'connection.php';
// pengecekan apakah tombol simpan di klik
// proses simpan data akan dilakukan jika tombol simpan di klik
if (isset($_POST['simpan'])) {
    // set data input
    // txtnim diambil dari form input name
    $inputnim = $_POST['txtnim'];
    $inputnama = $_POST['txtnama'];
    $inputalamat = $_POST['txtalamat'];
    // coding sql yang digunakan untuk input data
    $proses = $conn->prepare("INSERT INTO mahasiswa (nims, nama, alamat) VALUES (?, ?, ?)");
    // sss merupakan jenis data yg diinput,
    // bisa menggunakan s:string, i:integer, d:double, b:blob
    $proses->bind_param("sss", $inputnim, $inputnama, $inputalamat);
    // jalankan rangkaian coding diatas.
//    $proses->execute();
    if ($proses->execute() === true) {
        // redirect ke file index.php
        header('location: index.php');
    } else {
        echo 'gagal';
    }
}
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Input Data</div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="nim">Nim :</label>
                        <input type="text" class="form-control" name="txtnim" id="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" name="txtnama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <textarea class="form-control" name="txtalamat" id="alamat" cols="30" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" name="simpan">
                    <a href="index.php" class="btn btn-warning">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>