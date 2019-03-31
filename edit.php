<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">     
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.malasngoding.com</h3>
    </div>
    
    <br/>
    
    <a href="index.php">Lihat Semua Data</a>
 
    <br/>
    <h3>Edit data</h3>
 
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'")or die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query)){
    ?>
    <form action="update.php" method="post">        
        <table>
            <tr>
                <td>id kategori</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="id_kategori" value="<?php echo $data['id_kategori'] ?>">
                </td>                   
            </tr>   
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori'] ?>"></td>                    
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>                   
            </tr>               
        </table>
    </form>
    <?php } ?>
</body>
</html>