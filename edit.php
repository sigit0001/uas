<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Edit sibuku</title>
  </head>
  <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Data sibuku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" no="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Tambah sibuku</a>
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
    $no = $_GET['no'];
    // melakukan query untuk mendapatkan data buku berdasarkan $no
    $sibuku = mysqli_query($koneksi, "select * from sibuku where no='$no'");
    while ($data = mysqli_fetch_assoc($sibuku)){
    ?>
        <div class="container mt-5">
            <p><a href="./halaman_awal.php">Home</a> / Detail tabelBuku / <?php echo $data['NamaBuku'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil NamaBuku</p>
                </div>
                <div class="card-body fw-bold">
                     <!-- membuat form dengan method post untuk memanggil file update.php -->
                     <form method="post" action="./update.php">
                        <!-- form control -->
                        <div class="mb-3">
                            <!-- kita membuat input yang disembunyikan untuk menyimpan no buku -->
                            <input type="hidden" class="form-control" no="no" placeholder="Masukkan NamaBuku" name="no"  value="<?php echo $data['no']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <!-- input nama -->
                            <label for="nama" class="form-label">NamaBuku</label>
                            <input type="text" class="form-control" no="NamaBuku" placeholder="Masukkan Nama NamaBuku" name="NamaBuku"  value="<?php echo $data['NamaBuku']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <!-- input nim -->
                            <label for="Kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" no="Kategori" placeholder="Masukkan Kategori NamaBUku" name="Kategori"  value="<?php echo $data['Kategori']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <!-- input alamat -->
                            <label for="Penerbit" class="form-label">Penerbit</label>
                            <textarea type="text" class="form-control" no="Penerbit" placeholder="Masukkan Penerbit sibuku" name="Penerbit" value="<?php echo $data['Penerbit']; ?>" required></textarea>
                        </div>
                        <div class="mb-3">
                            <!-- input nim -->
                            <label for="Harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" no="" placeholder="Masukkan Harga NamaBUku" name="Kategori"  value="<?php echo $data['Harga']; ?>" required>
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
    <!-- Option 1: Bootstrap Bundle with Popper -
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
  </body>
</html>