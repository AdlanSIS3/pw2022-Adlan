<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nm_mhs = $_POST['nm_mhs'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nim','$nm_mhs','$alamat','$telp')");


header("location:index.php");





?>
