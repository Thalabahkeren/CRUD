<?php

include 'koneksi.php';

// menyimpan data id kedalam variabel

$id_prdk = $_GET['id_prdk'];

// query SQL untuk insert data

$query="DELETE from produk where id_prdk='$id_prdk'"; mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php
header("location:index.php");
?>