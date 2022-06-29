<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<script src="../bootstrap/js/bootstrap.js"></script>
<?php
include 'koneksi.php';
$id = $_GET['id_prdk'];
$produk  = mysqli_query($koneksi, "SELECT * FROM produk where id_prdk='$id'");
$row        = mysqli_fetch_array($produk);

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
    <div class="container">
    <h2>Edit Produk</h2>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['id_prdk'];?>" name="id_prdk">
<table class="table">
    <tr>
        <td width="200">Nama Produk</td><td><input type="text" class="form-control" name="nama_produk" value="<?php echo $row['nama_produk'];?>"></td>
    </tr>
    <tr>
        <td>Keterangan</td><td><input type="text" class="form-control" name="keterangan" value="<?php echo $row['keterangan'];?>"></td>
    </tr>
    <tr>
        <td>Harga</td><td><input type="text" class="form-control" name="harga" value="<?php echo $row['harga'];?>"></td>
    </tr>
    <tr>
        <td>Jumlah</td><td><input type="text" class="form-control" name="jumlah" value="<?php echo $row['jumlah'];?>"></td>
    </tr>
    <tr>
        <td colspan="2"> 
            <button type="submit" value="simpan" class='btn btn-primary'>SIMPAN</button>
            <a href="index.php" class='btn btn-primary'>KEMBALI</a>        
        </td>
    </tr>
</table>

</form>
</div>    
</body>

</html>