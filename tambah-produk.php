<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
<form action="simpan.php" method="post">
    <h2>Form Input</h2>
<table class="table">
    <tr>
        <td width='200'>Nama Produk</td><td><input class="form-control" type="text" name="nama_produk" onkeyup="isi_otomatis()"></td>
    </tr>
    <tr>
        <td>Keterangan</td><td><input class="form-control" type="text" name="keterangan"></td>
    </tr>
    <tr>
        <td>Harga</td><td><input type="text" class="form-control" name="harga"></td>
    </tr>
    <tr>
        <td>Jumlah</td><td><input type="text" class="form-control" name="jumlah"></td>
    </tr>
    <tr>
        <td colspan="2"> <button type="submit" value="simpan" class="btn btn-primary " >SIMPAN</button></td>
    </tr>
</table>

</form>    
</body>
</div>
</html>