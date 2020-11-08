<?php
include '../connect.php';
$id = $_GET['id'];
$query = "DELETE FROM master_barang WHERE kode_barang='$id'";
mysqli_query($koneksi, $query);

header("location:barang.php");

?>
