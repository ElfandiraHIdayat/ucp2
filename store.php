<?php
//include koneksi database
include './config.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nktp = $_POST['no_ktp'];
$ntelepon = $_POST['no_telepon'];
$tahunmasuk = $_POST['tahun_masuk'];
$masakerja = $_POST['jumlah_masa_kerja'];

// menginput data ke database
mysqli_query($koneksi, "insert into karyawan values('','$nama','$nktp','$ntelepon','$tahunmasuk','$masakerja')");
// mengembalikan ke halaman awal
header("location:./data_karyawan.php");