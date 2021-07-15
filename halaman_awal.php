<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
       
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Data Buku</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Data Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Tambah Buku</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container data-Buku mt-5">

         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Data Buku
        </button>

        <!-- Modal -->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- membuat form dengan method post untuk memanggil file store.php -->
                    <form method="post" action="store.php" name="form">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                        <!-- form control -->
                        <div class="mb-3">
                            <!-- input nama -->
                            <label for="NamaBuku" class="form-label">NamaBuku</label>
                            <input type="text" class="form-control" id="NamaBuku" placeholder="Masukkan NamaBuku" name="NamaBuku" required>
                        </div>
                        <div class="mb-3">
                            <!-- input nim -->
                            <label for="Kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="Kategori" placeholder="Masukkan Kategori" name="Kategori" required>
                        </div>
                        <div class="mb-3">
                            <!-- input alamat -->
                            <label for="Penerbit" class="form-label">Penerbit</label>
                            <textarea type="text" class="form-control" id="Penerbit" placeholder="Masukkan Penerbit" name="Penerbit" required></textarea>
                        </div>
                        <div class="mb-3">
                            <!-- input alamat -->
                            <label for="Harga" class="form-label">Harga</label>
                            <textarea type="text" class="form-control" id="Harga" placeholder="Masukkan Penerbit" name="Harga" required></textarea>
                        </div>
                        <div class="mb-3">
                            <!-- input alamat -->
                            <label for="Diskon" class="form-label">Diskon</label>
                            <textarea type="text" class="form-control" id="Diskon" placeholder="Masukkan Penerbit" name="Diskon" required></textarea>
                        </div>
                        <!-- akhir form control -->
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- akhir modal -->


<!-- modal delete -->
        <div  class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="delete.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-primary" value="HAPUS">Iya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <!-- akhir modal delete -->

        <table class="table table-striped" No="tabeluas">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php

                // memanggil config.php 
                include './config.php';

                // membuat variabel untuk nomor mahasiswa yang akan diincrement
                $no = 1;

                // melakukan query
                $uas = mysqli_query($koneksi,"select * from sibuku");

                // looping data mahasiswa
                while($data = mysqli_fetch_array($uas)){
        
                ?>
                    <!-- menampilkan data makasiswa ke dalam tabel -->
                    <tr>
                        <!-- increment nomor baris $no++ -->
                        <td><?php echo $no++ ?></td>

                        <!-- menampilkan data -->
                        <td><?php echo $data['NamaBuku'] ?></td>
                        <td><?php echo $data['Kategori'] ?></td>
                        <td><?php echo $data['Penerbit'] ?></td>
                        <td><?php echo $data['Harga'] ?></td>
                        <td><?php echo $data['Diskon'] ?></td>

                        <!-- kolom ini untuk aksi data mahasiswa -->

                        <td>
                            <!-- aksi edit dan delete, di sini menggunakan btn-sm agar tombolnya kecil-->
                            <a href="detail.php?no=<?php echo $data['no']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
                            <!-- link untuk masuk ke halaman edit -->
                            <!-- edit.php?id=<
                            ?php echo $data['id']; ?> mengirim id data mahasiswa ke halaman edit -->
                    
                            <a href="edit.php?no=<?php echo $data['no']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>

                            <!-- link untuk delete berdasarkan id, akan keluar confirm terlebih dahulu -->

                            <a href="delete.php?no=<?php echo $data['no']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('anda yakin akan menghapus data mahasiswa ini?')" >HAPUS</a>
                
                        </td>
                    </tr>
            
                <?php
                }
                ?>

            </tbody>
        </table>

    </div>
    <!-- dataTable js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script>
        $(document).ready(function () {
        $('#tabelsibuku').DataTable();
        });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>