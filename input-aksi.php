<?php
include 'koneksi.php';
$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
 
$query = mysqli_query($koneksi, "INSERT INTO kategori VALUES('','$id_kategori','$kategori')");
 
header("location:index.php?pesan=input");
?>