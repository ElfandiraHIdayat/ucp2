<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Edit Karyawan</title>
  </head>
  <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Data Karyawan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Tambah Karyawan</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <?php
    // memanggil file config.php
    include 'config.php';
    // menangkap id yang dikirim memalui button detail di index.php
    $id = $_GET['id'];
    // melakukan query untuk mendapatkan data Karyawan berdasarkan $id
    $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    while ($data = mysqli_fetch_assoc($karyawan)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold">
                     <!-- membuat form dengan method post untuk memanggil file update.php -->
                     <form method="post" action="update.php">
                        <!-- form control -->
                        <div class="mb-3">
                            <!-- kita membuat input yang disembunyikan untuk menyimpan id mahasiswa -->
                            <input type="hidden" class="form-control" id="id" placeholder="Masukkan Nama Karyawan" name="id"  value="<?php echo $data['id']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <!-- input nama -->
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan" name="nama"  value="<?php echo $data['nama']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <!-- input nim -->
                            <label for="nim" class="form-label">KTP</label>
                            <input type="text" class="form-control" id="KTP" placeholder="Masukkan KTP Karyawan" name="no_ktp"  value="<?php echo $data['no_ktp']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <!-- input alamat -->
                            <label for="alamat" class="form-label">Telepon</label>
                            <textarea type="text" class="form-control" id="Telepon" placeholder="Masukkan Telepon Karyawan" name="no_telepon" value="<?php echo $data['no_telepon']; ?>" required></textarea>
                        </div>
                        <div class="mb-3">
                            <!-- input telepon -->
                            <label for="telepon" class="form-label">Tahun Masuk</label>
                            <input type="text" class="form-control" id="tahun_masuk" placeholder="Masukkan Telepon Karyawan" name="tahun_masuk" required>
                        </div>
                        <div class="mb-3">
                            <!-- input telepon -->
                            <label for="telepon" class="form-label">Masa Kerja</label>
                            <input type="text" class="form-control" id="jumlah_masa_kerja" placeholder="Masukkan Telepon Karyawan" name="jumlah_masa_kerja" required>
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                     <!-- akhir form control -->
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
  </body>
</html>