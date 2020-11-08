<?php
include '../connect.php';
$id = $_GET['id'];
$query = "DELETE FROM penjualan WHERE nomor_faktur='$id'";
mysqli_query($koneksi, $query);

header("location: penjualan.php");

?>
