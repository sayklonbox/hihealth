<?php
//Membuat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "tubesdpplnew");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}