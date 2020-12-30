<!doctype html>
<html>
<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">-->
</head>
<body>
<div class="container">
    <div class="alert alert-info">Tambah Data</div>

    <form action="" method="post">
        <div class="form-group">
            <label for="">NIP</label>
            <input type="text" class="form-control" name="txtnip">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="txtnama">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="txtalamat">
        </div>
        <input type="submit" class="btn btn-primary"
               name="simpan" value="Simpan Data">
        <a href="index.php" class="btn btn-warning">Batal</a>
    </form>

</div>
</body>
</html>