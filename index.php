<?php 
include 'koneksi.php';
$query = mysqli_query($koneksi, "select * from kategori");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tugas4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">     
        <h1>Tugas 4 membuat inputan</h1>
        <h2>Menampilkan data Kategori Barang dari database</h2>
        <h3>webservice</h3>
    </div>
    <br/>

    <?php 
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    <br/>
    <a class="tombol" href="input.php">+ Tambah Data Baru</a>

        <h2>List Barang</h2>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Id Kategori</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
           <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_kategori"];?></td>
            <td><?php echo $data["kategori"];?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</html>