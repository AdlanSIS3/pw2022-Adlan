<!DOCTYPE html>
<html lang="en">

<?php
  include 'koneksi.php';
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Aplikasi Web Sederhana</title>
</head>
<body>
    <h1>Biodata</h1>
    <form method="post" action="simpan.php">
        <label for="fname">NIM:</label><br>
        <input type="number" id="nim" name="nim"><br>
        <label for="lname">Nama Mahasiswa:</label><br>
        <input type="text" id="lname" name="nm_mhs"><br>
        <label for="telp">Alamat:</label><br>
        <input type="text" id="telp" name="alamat"><br>
        <label for="telp">No Telp:</label><br>
        <input type="number" id="telp" name="telp">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <br>

    <table border="1">
        <tr>
          <th>#</th>
          <th>NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($penghubung, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $d['nim']?></td>
          <td><?php echo $d['nm_mhs']?></td>
          <td><?php echo $d['alamat']?></td>
          <td><?php echo $d['telp']?></td>
          <td><a href="#">Hapus</a> | <a href="#">Edit</a></td>
        </tr>

        <?php
        }
        ?>
      </table>
    
</body>
</html>
