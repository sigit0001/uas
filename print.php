<?php
include 'config.php';
$no = $_GET['no'];
$sibuku = mysqli_query($koneksi, "select * from sibuku where no='$no'");
while ($data = mysqli_fetch_assoc($sibuku)){
?>
    <doctype html>
    <html Lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title><?php echo $data['nama'] ?></title>
    <head>

    <body onload="window.print();">
        <div class="container mt-5">
             <p class="fw-bold">Profile buku</p>   
             <p>NamaBuku : <?php echo $data['NamaBuku'] ?></p>
            <p>Kategori : <?php echo $data['Kategori'] ?></p>
            <p>Penerbit : <?php echo $data['Penerbit'] ?></p>
            <p>Harga : <?php echo $data['Harga'] ?></p>
            <p>Diskon : <?php echo $data['Diskon'] ?></p>
        </div>
    <?php
}
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>
