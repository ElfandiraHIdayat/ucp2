<?php
//include koneksi data base
include './config.php';

$nama= $_POST["username"];
$katasandi = $_POST["password"];

$user = mysqli_query($koneksi, "SELECT * FROM user WHERE id = 1");
while($data =  mysqli_fetch_assoc($user)){
    if($nama == $data["username"] && $katasandi == $data["password"]){
        header("location:./data_karyawan.php");
    }
}

?>