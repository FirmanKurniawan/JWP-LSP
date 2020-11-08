<?php 
	include '../connect.php';
	$nama_barang = $_POST['nama_barang'];
	$satuan = $_POST['satuan'];
	$harga_jual = $_POST['harga_jual'];
	$harga_beli = $_POST['harga_beli'];

 $query = "INSERT INTO master_barang SET nama_barang='$nama_barang', satuan='$satuan', harga_jual='$harga_jual', harga_beli='$harga_beli'";
 mysqli_query($koneksi, $query);

 header("location:dashboard.php");

 ?>