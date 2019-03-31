<?php  
include 'koneksi.php';
$id = $_POST['id'];
$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
 
$query = mysqli_query($koneksi, "UPDATE kategori SET id_kategori='$id_kategori', kategori='$kategori' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>