<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$weight = $_POST['weight'];
$calory = $_POST['calory'];
$units = $_POST['units'];
 
// update data ke database
mysqli_query($koneksi,"update makanan set food='$nama', berat='$weight', kalori='$calory', satuan='$units' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>