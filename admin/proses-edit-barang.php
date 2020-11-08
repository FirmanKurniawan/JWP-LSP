<?php
include '../connect.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$satuan = $_POST['satuan'];

$query = "UPDATE master_barang SET nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', satuan='$satuan' WHERE kode_barang='$id'";
mysqli_query($koneksi, $query);
header("location:barang.php");

?>
