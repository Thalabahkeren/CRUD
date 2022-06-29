<?php
include 'koneksi.php';
// $_POST['nama'] diambil dari name yang ada di input form
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// query sql untuk insert data
$query="INSERT INTO produk 
SET nama_produk='$nama_produk',
    keterangan='$keterangan',
    harga='$harga',
    jumlah='$jumlah'";

mysqli_query($koneksi,$query);

//mengalihkan halaman ke index.php
header("location:index.php");

?>