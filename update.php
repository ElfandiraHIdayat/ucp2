<?php
// koneksi database
include './config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nktp = $_POST['no_ktp'];
$ntelepon = $_POST['no_telepon'];
$tahunmasuk = $_POST['tahun_masuk'];
$masakerja = $_POST['jumlah_masa_kerja'];
// update data ke database
mysqli_query($koneksi,"update karyawan set nama='$nama', ktp='$nktp', telepon='$ntelepon', tahun masuk='$tahunmasuk', masa kerja='$masakerja'  where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data_karyawan.php");