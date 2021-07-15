<?php
//include koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_GET['id'];


// menginput data ke database
mysqli_query($koneksi, "delete from karyawan where id='$id'");
// mengembalikan ke halaman awal
header("location:data_karyawan.php");