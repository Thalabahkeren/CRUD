
<h2>List Produk</h2>

<a href="tambah-produk.php" class="btn btn-primary">Tambah Produk</a>
<br>
<br>
<table border=1 class="table table-hover">
    <tr>
        <th>Nama Produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th colspan=2>AKSI</th>
    </tr>

<?php
include 'koneksi.php';
$produk = mysqli_query($koneksi, "SELECT * FROM produk");
foreach ($produk as $p){
    echo "<tr>
            <td>".$p['nama_produk']."</td>
            <td>".$p['keterangan']."</td>
            <td>".$p['harga']."</td>
            <td>".$p['jumlah']."</td>
            <td> 
            <a href='form-edit.php?id_prdk=$p[id_prdk]' class='btn btn-success'>EDIT</a>
            <a href='delete.php?id_prdk=$p[id_prdk]' class='btn btn-danger'>HAPUS</a>
            </td>
          </tr>";
}

?>

</table>
</div>