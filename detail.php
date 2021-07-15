<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Detail tabelBuku</title>
  </head>
  <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Data tabelBuku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Tambah tabelBuku</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <?php
    // memanggil file config.php
    include './config.php';
    // menangkap id yang dikirim memalui button detail di index.php
    $no = $_GET['no'];
    // melakukan query untuk mendapatkan data Buku berdasarkan $no
    $sibuku = mysqli_query($koneksi, "select * from sibuku where no='$no'");
    while ($data = mysqli_fetch_assoc($sibuku)){
    ?>
        <div class="container mt-5">
            <p><a href="halaman_awal.php">Home</a> / Detail Buku / <?php echo $data['NamaBuku'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil NamaBuku</p>
                </div>
                <div class="card-body fw-bold">
                    <p>NamaBuku : <?php echo $data['NamaBuku'] ?></p>
                    <p>Kategori: <?php echo $data['Kategori'] ?></p>
                    <p>Penerbit : <?php echo $data['Penerbit'] ?></p>
                    <p>Harga : <?php echo $data['Harga'] ?></p>
                    <?php $hargatotal = ($data['Diskon']/100) * $data['Harga'];?>
                    <p>Diskon : <?php echo $hargatotal  ?></p>
                    <a class="btn btn-primary" href="print.php?no=<?php echo $data['no']; ?>">Cetak</a>
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