<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id='$id'")or die(mysql_error());
header("location:index.php?pesan=hapus");
?>