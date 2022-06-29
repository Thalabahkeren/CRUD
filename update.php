<?php

include 'koneksi.php';
$id_prdk = $_POST['id_prdk'];
// menyimpan data kedalam variabel
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// query SQL untuk insert data

$query="UPDATE produk 
SET nama_produk='$nama_produk',
    keterangan='$keterangan',
    harga='$harga',
    jumlah='$jumlah' where id_prdk='$id_prdk'";
    
mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php

header("location:index.php");
?>