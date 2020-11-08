<?php 
	include '../connect.php';
	$nomor_faktur = $_POST['nomor_faktur'];
	$tanggal_faktur = $_POST['tanggal_faktur'];
	$nama_konsumen = $_POST['nama_konsumen'];
	$kode_barang = $_POST['kode_barang'];
	$jumlah = $_POST['jumlah'];

	$barang = mysqli_query($koneksi, "SELECT * FROM master_barang where kode_barang='$kode_barang'");
	$row = mysqli_fetch_array($barang);
	$harga_satuan = $row['harga_jual'];
	$harga_total = $jumlah * $row['harga_jual'];

 $query = "INSERT INTO penjualan SET nomor_faktur='$nomor_faktur', tanggal_faktur='$tanggal_faktur', nama_konsumen='$nama_konsumen', kode_barang='$kode_barang', jumlah='$jumlah', harga_satuan='$harga_satuan', harga_total='$harga_total'";
 mysqli_query($koneksi, $query);

 header("location: penjualan.php");

 ?>