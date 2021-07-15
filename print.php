<?php
include 'config.php';
$id = $_GET['id'];
$karyawan = mysqli_query($koneksi, "select * from karyawan where id ='$id'");
while ($data = mysqli_fetch_assoc($karyawan)){
?> 
    <!DOCTYPE html>
    <html lange="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title><?php echo $data ['nama'] ?></title>
    </head>

    <body onload="window.print();">
        <div class="constainer mt-5">
            <p class="fw-bold">Profil Mahasiswa</p>
            <p>Nama : <?php echo $data['nama'] ?></p>
            <p>KTP: <?php echo $data['no_ktp'] ?></p>
            <p>Telepon : <?php echo $data['no_telepon'] ?></p>
            <p>Tahun Masuk: <?php echo $data['tahun_masuk'] ?></p>
            <p>Masa Kerja: <?php echo $data['jumlah_masa_kerja'] ?></p>
        </div>
    <?php
}
    ?>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>